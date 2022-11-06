<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use auth;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = Pesanan::all();
        // dd($pesanan);
        return view('admin..pesanan.index', [
            'pesanan' => $pesanan,
        ]);
    }

    public function view()
    {
        $pesanan = Pesanan::all();
        // dd($pesanan);
        return $pesanan;
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
        $pesanan = new Pesanan;
        $pesanan->produk = $request->produk;
        $pesanan->pemesan = $request->pemesan;
        $pesanan->jumlah = $request->jumlah;
        $pesanan->nama = $request->nama;
        $pesanan->nama_perusahaan = $request->nama_perusahaan;
        $pesanan->nomorwa = $request->nomorwa;
        $pesanan->email = $request->email;
        $pesanan->save();

        return redirect()->back();
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function buat(Request $request)
    {
        $pesanan = new Pesanan;
        $pesanan->produk = $request->produk;
        $pesanan->pemesan = $request->pemesan;
        $pesanan->jumlah = $request->jumlah;
        $pesanan->nama = $request->nama;
        $pesanan->nama_perusahaan = $request->nama_perusahaan;
        $pesanan->nomorwa = $request->nomorwa;
        $pesanan->email = $request->email;
        $pesanan->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        $pesanan = Pesanan::find($pesanan)->first();
        $pesanan->produk = $request->produk;
        $pesanan->pemesan = $request->pemesan;
        $pesanan->jumlah = $request->jumlah;
        $pesanan->nama = $request->nama;
        $pesanan->nama_perusahaan = $request->nama_perusahaan;
        $pesanan->nomorwa = $request->nomorwa;
        $pesanan->email = $request->email;
        $pesanan->status = $request->status;
        $pesanan->update();
        // dd($request);
        // return $request;
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($pesanan)
    {
        $pesanan = Pesanan::find($pesanan);
        // dd($pesanan);
        $pesanan->delete();

        return redirect()->back();
    }

    public function logout () 
    {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }
}
