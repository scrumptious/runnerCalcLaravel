<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller {

    public function index(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        $runner = $request->all();

        return view('contact/index', ['runner' => $runner]);
    }
}
