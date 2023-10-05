<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('homepage.index');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        return view('pages.services');
    }
    public function projects()
    {
        return view('pages.projects');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function faq()
    {
        return view('pages.faq');
    }
    public function privacy()
    {
        return view('pages.privacy');
    }
}
