<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function books()
    {
        return view('books');
    }

    public function videos()
    {
        return view('videos');
    }

    public function book()
    {
        return view('book-marc');
    }

    public function bookSubmit(Request $request)
    {
        $data = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // TODO: send email or store request in database.
        // For now, we'll just flash a success message.
        return back()->with('status', 'Thank you for reaching out! Marc will review your request and be in touch soon.');
    }

    public function freeGuideSubmit(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
        ]);

        // TODO: enqueue lead for the free guide delivery (PDF/video etc.)
        return back()->with('status', 'Thanks! We\'ll send your free mindset guide shortly.');
    }
}
