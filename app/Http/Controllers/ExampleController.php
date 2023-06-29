<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        $ourName = 'John';
        $animals = ['Aida', 'Lorna', 'Fe'];

        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catname' => 'Meowsalot']);

#        return '<h1>Homepage</h1><a href="/about">View the about page.</a>';
    }

    public function aboutPage() {
        return view('single-post');
        
#        return '<h1>About page</h1><a href="/">View the Homepage.</a>';
    }
}
