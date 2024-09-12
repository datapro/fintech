<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
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


