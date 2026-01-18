<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() { return view('home'); }
    public function about() { return view('about'); }
    public function skills() { return view('skills'); }
    public function experience() { return view('experience'); }
    public function projects() { return view('projects'); }
    public function education() { return view('education'); }
    public function certificates() { return view('certificates'); }
    public function services() { return view('services'); }
    public function contact() { return view('contact'); }
    
    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        return back()->with('success', 'Thank you for your message. I will get back to you soon!');
    }
}
