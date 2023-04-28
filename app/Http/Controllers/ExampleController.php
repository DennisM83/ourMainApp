<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homePage()
    {
        return '<h1>Homepage</h1><a href="/about">Vist about page</a>';
    }

    public function aboutPage()
    {
        return '<h1>About Page</h1><a href="/">Vist home page</a>';
    }
}
