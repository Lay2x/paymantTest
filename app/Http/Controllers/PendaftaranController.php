<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Paket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pendaftaran';
        $daftar = Pendaftaran::all();
        $paket = Paket::all();
        $user = DB::table('users')->get();
        return view ('pendaftaran.index', compact('title', 'daftar', 'paket', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Daftar Seminar';
        return view('pendaftaram.index', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_telp' => 'required',
            'status' => 'required',
            'id_user' => 'required',
            'id_paket' => 'required'
        ]);
        $daftar = new Pendaftaran();
        $daftar->no_telp = $request->no_telp;
        $daftar->status = $request->status;
        $daftar->id_user = $request->id_user;
        $daftar->id_paket = $request->id_paket;
        $daftar->save();
        return redirect()->route('pendaftaran.index')->with('Sukses', 'Berhasil Mendaftar Seminar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }
}
