<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('index', [
            "title"     => "Laravel | Home"
        ]);
    }

    public function about()
    {
            return view('about', [
            "title"     => "Laravel - About",
            "nama"      => "M.Andhi Rohmat Basuki",
            "guru"      => "Mapel Produktif RPL"
        ]);
    }

    public function blog_konten()
    {
        return view('blog', [
            "title"     => "Laravel | Blog",
            "blog"      => Blog::all()
        ]);
    }

    public function tampil($title_lain)
    {
        return view('read', [
            "title"     => "Laravel | Postingan",
            "blog"      => Blog::find($title_lain)
        ]);
    }
}
