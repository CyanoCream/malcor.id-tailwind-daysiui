<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $porto = Portofolio::all();

        return view ('admin.portofolio.index',
        [
            'porto' => $porto
        ]);
    }

    public function view()
    {
        $porto = Portofolio::all();

        return $porto;
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
        $porto = new Portofolio;
        $porto->gambar = $request->file('gambar')->store('images');
        $porto->gmbr_2 = $request->file('gmbr_2')->store('images');
        $porto->jenis = $request->jenis;
        $porto->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $portofolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        $porto = Portofolio::find($portofolio)->first();
        $porto->gambar = $request->file('gambar')->store('images');
        $porto->gmbr_2 = $request->file('gmbr_2')->store('images');
        $porto->jenis = $request->jenis;
        $porto->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($portofolio)
    {
        $porto = Portofolio::find($portofolio);
        $images = 'public/'. $porto->gambar;
        // dd($images);
       if($porto->gambar)
        {
            Storage::delete($porto->gambar);
        }
        $porto->delete();

        return redirect()->back();
    }
}
