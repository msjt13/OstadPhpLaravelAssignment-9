<?php

namespace App\Http\Controllers;

class PageController extends Controller {
    //
    public function index() {
        return view( 'home' );
    }

    public function about() {
        return view( 'about' );
    }

    public function work() {
        return view( 'work' );
    }

    public function contact() {
        return view( 'contact' );
    }
}
