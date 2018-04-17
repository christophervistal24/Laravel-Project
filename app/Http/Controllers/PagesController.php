<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Home';
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'About us';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = [
            'title' => 'Services',
            'services' => [
                'Web Design',
                'Programming',
            ],
            'user_info' => [
                'firstname' => 'Christopher',
                'lastname'  => 'Vistal',
                'id'   => 12,
            ],
        ];
        return view('pages.services')->with($data);
    }

    public function login(){
        $title = 'Login first';
        return view('pages.login')->with('title',$title);
    }
}
