<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DefaultController extends Controller {

    public function index() {

        $runners = DB::select('select * from runner');
        return view('welcome', ['runner' => $runners]);
    }
    public function show($id) {

    }
}
