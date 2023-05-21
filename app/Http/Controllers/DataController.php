<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\data;

class DataController extends Controller
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
        //
        return view('tambahData', [
            'data' => data::all(),
            'title' => "Halaman Tambah Data"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, data $data)
    {
        //
        $validate = $request->validate([
            "pemprov" => "required|max:255",
            "modalOjk" => "required|integer",
            "modalNonOjk" => "required|integer",
            "jumlah" => "required|integer",
            "kepemilikan" => "required",
        ]);
        $validate['kehadiran'] = 'tidakHadir';


        $data->create($validate);

        return redirect('/')->with('success', 'data telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(data $data)
    {
        //
        return view('editData', [
            'title' => "edit Data",
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, data $data)
    {
        //
        $validate = $request->validate([
            "pemprov" => "required|max:255",
            "modalOjk" => "required|integer",
            "modalNonOjk" => "required|integer",
            "jumlah" => "required|integer",
            "kepemilikan" => "required",
        ]);



        data::where('id', $data->id)->update($validate);
        return redirect('/')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(data $data)
    {
        //
        $data->delete();

        return redirect('/')->with('success', 'data berhasil dihapus');
    }
}
