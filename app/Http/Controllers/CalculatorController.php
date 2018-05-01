<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller {

    public function index() {
        return view('calculator.index');
    }



    public function math(Request $request) {
        $result = $request->all();
        $currentBest = $result['hours'] * 3600 + $result['minutes'] * 60 + $result['seconds'];
        // dd($currentBest);
        $currentPace = $currentBest / ($result['distance'] / 1000);
        $currentDistance = $result['distance'];
        $currentPaceFormated = '';

        if($currentPace > 3600) {
            $currentPaceFormated .= round($currentPace / 3600) . ':';
        }
        $currentPaceFormated .= round($currentPace / 60) . ':';
        $currentPaceFormated .= $currentPace % 60;


        dd($currentPaceFormated . ' / 1km on a ' . $currentDistance . 'm track');





        return redirect()->route('app_calculator_present');
    }



    public function present() {


    }
}
