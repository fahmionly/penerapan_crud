<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_mobil = Mobil::all();
        return view('mobil.index', compact('data_mobil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Mobil::create($input);
        return redirect('/mobil');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mobil = Mobil::find($id);
        return view('mobil.detail', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mobil = Mobil::find($id);
        return view('mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $mobil = Mobil::find($id);
        $data = $request->all();
        $mobil->update($data);
        return redirect('/mobil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Mobil::find($id);
        $data->delete();
        return back();
    }
}
