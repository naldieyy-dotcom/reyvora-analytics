<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        return back()->with('success', 'Your message has been sent successfully!');
    }
}