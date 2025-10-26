<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class StartPageController extends Controller
{
    public function index()
    {
        return Inertia::render('StartPage');
    }
}
