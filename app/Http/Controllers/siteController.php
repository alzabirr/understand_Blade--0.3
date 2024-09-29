<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    function home(){
        return view("page.home");
    }

    function header(){
        return view("layout.header");
    }


function aboutpage(){
    return view("page.about");
}


function contactpage(){
    return view("page.contact");
}


function newspage(){
    return view("page.news");
}


function contact(){
    return view("page.contact");
}


function img(){
    return response()->file("bg.jpg");
}
}


