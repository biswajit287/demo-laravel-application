<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to my site';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about()
    {
        $data = array(
            'title' => 'About Us',
            'aboutus' => ['Contact','Email','Founders']
        );
        return view('pages.about')->with($data);
    }
}
