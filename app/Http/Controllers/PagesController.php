<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Laravel!';
        //Method 1 of passing values
     //return view ('pages.index', compact('title'));
     //Method 2 of passing values
     return view ('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view ('pages.about')->with('title', $title);
       }

       public function services(){
           $data = array(
           'title' => 'Services',
           'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view ('pages.services')-> with($data);
       }
}