<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('article.index',[
            'articles'=> Article::all(),
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create', ['action' => route('articles.store'), 'method' => 'post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'title'=>'required|unique:articles|min:3|max:30',
        'subtitle'=>'required|unique:articles|min:3|max:100',
        'image'=>'required|mimes:jpg,gif,png',
        'text'=>'required',
    ]);

        auth()->user()->articles()->create($request->all());
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.show',[
            'article'=>$article

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit', [
            'action' => route('article.update', $article->id),
            'method' => 'put',
            'model' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $this->authorize('update', $article);
        $request->validate([
        'title'=>'required|min:3|max:50',
        'subtitle'=>'required|min:3|max:100',
        'image'=>'required|mimes:jpg,gif,png',
        'text'=>'required',
    ]);
        $article->update($request->all());
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $article=Article::find($id);
        $this->authorize('delete', $article);
        $article->delete();
        return redirect()->route('article.index');
    }
}
