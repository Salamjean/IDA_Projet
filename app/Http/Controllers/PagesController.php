<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function news(){
        return view('pages.news.news');
    }
    public function newsHistory(){
        return view('pages.news.newsHistory');
    }
    public function donation(){
        return view('pages.donation');
    }
}
