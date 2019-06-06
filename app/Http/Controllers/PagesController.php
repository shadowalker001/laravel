<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $people = array('kenechi', 'akubue', 'augustus', 10);
        return view('pages.home', compact('people'));
    }

    public function about(){
        return view('about');
    }
    
    //
}
