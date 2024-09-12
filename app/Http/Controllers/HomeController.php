<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Transaction;
use App\Models\User;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
    // $account = Account::find(1);
    $account = User::with('accounts')->findOrFail($id);
        return view('home',compact('account'));
    }
    public function deposit(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        $account = Auth::user()->account;

        $transaction = new Transaction([
            'amount' => $request->amount,
            'type' => 'deposit',
            'description' => $request->description,
        ]);

        $account->balance += $request->amount;
        $account->transactions()->save($transaction);  // Correct usage here
        $account->save();

        return redirect()->back()->with('success', 'Deposit successful');
    }

    public function withdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        $account = Auth::user()->account;

        if ($account->balance < $request->amount) {
            return redirect()->back()->with('error', 'Insufficient funds');
        }

        $transaction = new Transaction([
            'amount' => $request->amount,
            'type' => 'withdrawal',
            'description' => $request->description,
        ]);

        $account->balance -= $request->amount;
        $account->transactions()->save($transaction);  // Correct usage here
        $account->save();

        return redirect()->back()->with('success', 'Withdrawal successful');
    }

}
