<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function start(){
        $data = [
            ['id' => 1,
            'name' => 'project1',
            'image' => '1.jpg',
            'category' => 'Design'],

            ['id' => 2,
            'name' => 'project2',
            'image' => '2.jpg',
            'category' => 'Design'],

            ['id' => 3,
            'name' => 'project3',
            'image' => '3.jpg',
            'category' => 'camera'],

            ['id' => 4,
            'name' => 'project4',
            'image' => '4.jpg',
            'category' => 'food'],

            ['id' => 5,
            'name' => 'project5',
            'image' => '5.jpg',
            'category' => 'Design'],

            ['id' => 6,
            'name' => 'project6',
            'image' => '6.jpg',
            'category' => 'old']
        ];
        return view('index')->with('data',$data);
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function portfolio(){
        $data = [
            ['id' => 1,
            'name' => 'project1',
            'image' => '1.jpg',
            'category' => 'Design'],

            ['id' => 2,
            'name' => 'project2',
            'image' => '2.jpg',
            'category' => 'Design'],

            ['id' => 3,
            'name' => 'project3',
            'image' => '3.jpg',
            'category' => 'camera'],

            ['id' => 4,
            'name' => 'project4',
            'image' => '4.jpg',
            'category' => 'food'],

            ['id' => 5,
            'name' => 'project5',
            'image' => '5.jpg',
            'category' => 'Design'],

            ['id' => 6,
            'name' => 'project6',
            'image' => '6.jpg',
            'category' => 'old']
        ];
        return view('portfolio')->with('data',$data);
    }

    public function contact(){
        return view('contact');
    }

}
