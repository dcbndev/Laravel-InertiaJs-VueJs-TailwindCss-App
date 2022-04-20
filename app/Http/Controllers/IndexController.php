<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return inertia('Home', [
            'title' => 'Home!'
        ]);
    }

    public function about()
    {
        return inertia('About', [
            'title' => 'About'
        ]);
    }
}
