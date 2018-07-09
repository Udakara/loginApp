<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        $title='Welcome to Ryde';
        return view('pages.master')->with('title',$title);
    }
}
