<?php

namespace App\Http\Controllers;


class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        return view('contact/contact');
    }
}
