<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function manageExpense()
    {
        $expense = Expense::latest()->get();
        return view('expense.manage',compact('expense'));
    }

    public function manageExpenseApi()
    {
       // return 'I am here';
       $expense = Expense::all();

       if($expense->count() > 0){
        return response()->json([
            'status' => 200,
            'students' => $expense
       ], 200);
       }else{
        return response()->json([
            'status' => 404,
            'message' => 'No Records Found'
       ], 404);
       }
    } // End Method

    public function addExpense()
    {
        return view('expense.add');
    }

}
