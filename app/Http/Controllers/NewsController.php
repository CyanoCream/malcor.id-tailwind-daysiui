<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = news::all();

        return view ('admin.news.index',[
            'news' => $news
        ]);
    }

    public function view()
    {
        $news = news::all();

        return $news;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News;
        $news->judul = $request->judul;
        $news->konten = $request->konten;
        $news->gambar = $request->file('gambar')->store('images');
        $news->save();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $news = News::find($news)->first();
        $news->judul = $request->judul;
        $news->konten = $request->konten;
        $news->gambar = $request->file('gambar')->store('images');
        $news->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($news)
    {
        $news = News::find($news);
        // dd($pesanan);
        $images = 'public/'. $news->gambar;
        // dd($images);
       if($news->gambar)
        {
            Storage::delete($news->gambar);
        }
        $news->delete();

        return redirect()->back();
    }
}
