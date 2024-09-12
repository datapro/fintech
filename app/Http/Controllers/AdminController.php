<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Account;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch all users to display on the admin dashboard
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }
}
