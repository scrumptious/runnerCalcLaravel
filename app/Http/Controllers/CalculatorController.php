<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller {

    public function index() {
        return view('calculator.index');
    }



    public function math(Request $request) {
        $result = $request->all();
        



        return redirect()->route('app_calculator_present');
    }



    public function present() {


    }
}
