<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Tambahkan ini

class HomeController extends Controller
{
    public function index()
    {
        // Tambahkan baris ini untuk menambah penghitung
        DB::table('counters')->where('key', 'page_visits')->increment('value');

        $galleries = Gallery::latest()->take(8)->get();
        $latestPost = Post::latest()->first();
        $recentPosts = Post::latest()->skip(1)->take(4)->get();

        return view('landing', compact('galleries', 'latestPost', 'recentPosts'));
    }
}