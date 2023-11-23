<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function manageExpense()
    {
        return view('expense.manage');
    }

    public function addExpense()
    {
        return view('expense.add');
    }

}
