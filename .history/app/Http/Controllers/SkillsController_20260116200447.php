<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display the Skills page
     */
    public function index()
    {
        return view('skills');
    }
}
