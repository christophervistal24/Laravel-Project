<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        $post = null;
        // Check if the user already login
        if(!empty(auth()->user()->id)){
            $post = auth()->user()->id;
        }

        return view('pages.index')->with('post',$post);
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
