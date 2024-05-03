<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homepage()
    {
        $blogs = blog::latest()->limit(6)->get(); // order by created_at asc
        return view('Frontend.blog', compact('blogs'));
    }
    public function detail()
    {
        return view('Frontend.detail');
    }
    public function categories()
    {
        return view('Frontend.categories');
    }
}
