<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class utifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    // mengambil data dari table books
    $utif = DB::table('utif') -> get();
    // mengirim data books ke view books
    return view('utif', ['utif' => $utif]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // untuk validasi form
    $this -> validate($request, [
        'name' => 'required',
        'date' => 'required',
        'time' => 'required',
    ]);
    // insert data ke table books
    DB::table('utif') -> insert([
        'Kegiatan' => $request -> name,
        'Tanggal' => $request -> date,
        'Waktu' => $request -> time,
    ]);
    // alihkan halaman tambah buku ke halaman books
    return redirect('/utif') -> with('status', 'Jadwal Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // mengambil data books berdasarkan id yang dipilih
        $u = DB::table('utif')->where('id_kegiatan',$id)->first();
        // passing data books yang didapat ke view edit.blade.php
        return view('edit', compact('u'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        // untuk validasi form
    $this -> validate($request, [
        'name' => 'required',
        'date' => 'required',
        'time' => 'required',
    ]);
    // update data books
    DB::table('utif') -> where('id_kegiatan', $request -> id) -> update([
        'Kegiatan' => $request -> name,
        'Tanggal' => $request -> date,
        'Waktu' => $request -> time,
        ]);
    // alihkan halaman edit ke halaman books
    return redirect('/utif') -> with('status', 'Data Kegiatan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus data books berdasarkan id yang dipilih
    DB::table('utif') -> where('id_kegiatan', $id) -> delete();
    // Alihkan ke halaman books
    return redirect('/utif') -> with('status', 'Data Kegiatan Berhasil DiHapus');
    }
}
