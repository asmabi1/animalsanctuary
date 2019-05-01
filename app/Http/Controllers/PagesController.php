<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Aston Animal Sanctuary';
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $data = array(
            'title' => 'About us',
            'about' => ['Adoption', 'Animal care', 'Pet insurance']
        );
        return view('pages.about')->with($data);
    }

    public function adoption(){
        $title = 'Adoption requests';
        return view('pages.adoption')->with('title',$title);
    }

}
