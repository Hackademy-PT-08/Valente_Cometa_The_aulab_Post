<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()

    {
        $articles = Article::orderBy('created_at','desc')->take(6)->get();
        return view ('home',compact('articles'));
        return view ('home');
    }
}
