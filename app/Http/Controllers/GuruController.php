<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\siswa;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = siswa::all();
        return view ('guru.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            $siswa = siswa::findOrFail($id);

            // Update status to 'done'
            $siswa->status = 'done';
            $siswa->save();

            return redirect('guru')->with('success', 'Status updated to done successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // Mencari siswa berdasarkan ID
    $siswa = siswa::findOrFail($id);

    // Menghapus data siswa
    $siswa->delete();

    // Redirect ke halaman guru dengan pesan sukses
    return redirect('guru')->with('success', 'Siswa berhasil dihapus.');
    }
}
