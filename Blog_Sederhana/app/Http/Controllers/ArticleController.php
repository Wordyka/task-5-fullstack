<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with('user','category')->latest()->simplePaginate(5);
        return view('guest.article', ['articles'=>$articles, 'title'=>'Article']);

        $client = new Client();
        $response = $client->request('GET','http://localhost:9010/student/');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode($body, true);

        return view('beranda',['data' => $data]);
    }

    public function indexHome()
    {
        $articles = Article::with('user','category')->latest()->simplePaginate(5);
        return view('guest.home', ['articles'=>$articles, 'title'=>'Home']);
    }

    public function indexUser(Request $request, $user_id)
    {
        $articles = Article::with('user','category')->latest()->where('user_id',$user_id)->simplePaginate(5);
        return view('guest.user-article', ['articles'=>$articles, 'title'=>'Article']);
    }

    public function indexCategory(Request $request, $category_id)
    {
        $articles = Article::with('user','category')->latest()->where('category_id',$category_id)->simplePaginate(5);
        return view('guest.category-article', ['articles'=>$articles, 'title'=>'Category']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
