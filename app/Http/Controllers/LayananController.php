<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Layanan;
use App\Models\News;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = Layanan::all();
        return view ('admin.layanan.index',[
            'layanan' => $layanan
        ]);
    }

    public function view()
    {
        $news = News::all();
        $layanan = Layanan::all();
        return view ('welcome', [
            'layanan' => $layanan,
            'news' => $news
        ]);
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
        
        // ddd($request);
        $layanan = new Layanan;
        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->keterangan = $request->keterangan;
        $layanan->gambar = $request->file('gambar')->store('images');
        $layanan->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        $layanan = Layanan::find($layanan)->first();
        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->keterangan = $request->keterangan;
        $layanan->gambar = $request->file('gambar')->store('images');
        $layanan->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($layanan)
    {
        $lay = Layanan::find($layanan);
        $images = 'public/'. $lay->gambar;
        // dd($images);
       if($lay->gambar)
        {
            Storage::delete($lay->gambar);
        }
        
        $lay->delete();
        
        return redirect()->back();
    }
}
