<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DefaultController extends Controller {

    public function index() {

        return view('welcome');
    }
    public function show($id) {

    }
}
