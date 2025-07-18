<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $postCount = Post::count();
        $galleryCount = Gallery::count();
        $visitorCount = DB::table('counters')->where('key', 'page_visits')->value('value');
        $latestPosts = Post::latest()->take(5)->get();
        $latestGalleries = Gallery::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'postCount',
            'galleryCount',
            'visitorCount',
            'latestPosts',
            'latestGalleries'
        ));
    }
}