<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            $tags = Tag::all();
            return view('articles.create', compact('tags'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $img_id= uniqid();
        $imagename = 'img-articolo'. $img_id.'.'.'jpg';
        $article=Article::create(

             [
                'title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'body'=>$request->input('body'),
                'img'=>$imagename,
                'user_id'=>auth()->user()->id,
                'category_id'=>$request->input('category_id'),

             ]

            );
            
            $image = $request->file('immagine')->storeAs("public",$imagename);
            $selectedTags = $request->input('tags');
            foreach ($selectedTags as $tagId){
                $article->tags()->attach($tagId);
            }
            

            
                return redirect()->route('home')->with("success", "Articolo caricato correttamente");
    }


    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }

    public function articles_by_category(Category $category){
        $articles= Article::where('category_id', $category->id)->where('is_accepted',true)->orderBy('created_at','DESC')->get();

        return view('article.category', compact('articles','category'));
    }

    




}
