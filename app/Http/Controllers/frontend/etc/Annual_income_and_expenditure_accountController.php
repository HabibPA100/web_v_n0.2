<?php

namespace App\Http\Controllers\frontend\etc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Annual_income_and_expenditure_accountController extends Controller
{
    public function index()
    {
        return view('frontend.etc.annualIncomeOfYear');
    }
}
