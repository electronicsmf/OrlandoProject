<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to laravel';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    
    public function contact(){
        $title = 'Welcome to Orlando Appliance Repair and Electronics';
        //return view('pages.index', compact('title'));
        return view('pages.contact')->with('title', $title);
    }
    
    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
    
    public function services(){
        $data = array(
            'title' => 'services',
            'services' => ['Appliance Repair','Electronics Repair','Computer Repair']

        );
        return view('pages.services')->with($data);
    }

}
