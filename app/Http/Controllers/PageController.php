<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Video;
use App\Models\SpeakingRequest;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function books()

    {   
        $books = Book::orderBy('position')->get();

        return view('books', compact('books'));
    }

    public function videos()
    {
        $videos = Video::latest()->get();

        return view('videos', compact('videos'));
    }

    public function book()
    {
        return view('book-marc');
    }

    //Booking and free guide form submissions
    public function bookSubmit(Request $request)
    {
         $data = $request->validate([
        'fullname' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

        SpeakingRequest::create([
            'name' => $data['fullname'],
            'email' => $data['email'],
            'subject' => $data['subject'],
            'message' => $data['message'],
        ]);

        return back()->with('status', 'Thank you! Your request was sent successfully.');
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
