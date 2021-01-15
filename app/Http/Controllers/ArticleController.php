<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Producer;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with(['producer'])->paginate();
        return view('articles.index',compact ('articles'));
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('articles.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validated=$request->validate([
            'article_code' => 'required|max:255',
            'article_name' => 'required|max:255',
            'article_tp' => 'required|max:255',
            'article_pal' => 'required|max:255',
            'category' => 'required|max:255',
            'producer_id' => ''
        ]);
        
        
        $articles=Article::create($validated);
        return view('articles.show', compact ('articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles= Article::with('producer')->findorFail($id);
        $article_center=$articles->centers()->paginate();
        $article_catalog=$articles->catalogs()->paginate();
        $article_customer=$articles->customers()->paginate();
        return view('articles.show',compact('articles','article_center','article_catalog','article_customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles=Article::findOrFail($id);
        $producers=Producer::pluck('producer_name','id');
        return view('articles.edit', compact ('articles','producers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated=$request->validate([
            'article_code' => 'required|max:255',
            'article_name' => 'required|max:255',
            'article_tp' => 'required|max:255',
            'article_pal' => 'required|max:255',
            'category' => 'required|max:255',
            'producer_id' => 'required'
        ]);

        $articles=Article::findOrFail($id);
        $articles-> fill($validated);
        $articles->save();
        return redirect() ->route('articles.show',['article'=>$articles ->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        return redirect() ->route('articles.index');
    }
}
