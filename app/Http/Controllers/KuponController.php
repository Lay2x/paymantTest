<?php

namespace App\Http\Controllers;

use App\Models\Kupon;
use Illuminate\Http\Request;

class KuponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Kupon';
        $kupon = Kupon::all();
        return view('kupon.index', compact('kupon', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kupon';
        return view('kupon.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_kupon' => 'required',
            'potongan_harga' => 'required',
        ]);
        $kupon = new Kupon();
        $kupon->kode_kupon = $request->kode_kupon;
        $kupon->potongan_harga = $request->potongan_harga;
        $kupon->save();
        return redirect()->route('kupon.index')->with('Sukses', 'Berhasil Tambah Data Kupon');
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
    public function edit(Kupon $kupon)
    {
        $title = 'Edit Kupon';
        return view('kupon.edit', compact('kupon', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kupon = Kupon::findorfail($id);
        $update = [
            'kode_kupon' => $request->kode_kupon,
            'potongan_harga' => $request->potongan_harga,
        ];
        $kupon->update($update);
        return redirect()->route('kupon.index')->with('Sukses', 'Berhasil Edit Data Kupon');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kupon $kupon)
    {
        $kupon->delete();
        return redirect()->back()->with('Delete','Berhasil Hapus Data Kupon');
    }
}
