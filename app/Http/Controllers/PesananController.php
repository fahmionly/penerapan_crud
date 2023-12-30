<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Makanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = Pesanan::all();
        $makanan = Makanan::all();

        return view('pesanan.index', compact('pesanan','makanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $makanan = Makanan::all();
       return view('pesanan.create', compact('makanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Pesanan::create($input);
        return redirect('/pesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pesanan = Pesanan::find($id);
        return view('pesanan.detail', compact('pesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pesanan = Pesanan::find($id);
        $makanan = Makanan::all();
        return view('pesanan.edit', compact('pesanan','makanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pesanan = Pesanan::find($id);
        $data = $request->all();
        $pesanan->update($data);
        return redirect('/pesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Pesanan::find($id);
        $data->delete();
        return back();
    }
}
