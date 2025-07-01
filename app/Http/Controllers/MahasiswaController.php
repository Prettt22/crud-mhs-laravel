<?php

namespace App\Http\Controllers;

// use App\Models\Mahasiswa;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|numeric|unique:mahasiswa',
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'nullable|in:L,P',
            'alamat' => 'required',
            'no_telepon' => 'nullable',
            'email' => 'required|email|unique:mahasiswa',
            'program_studi' => 'required',
            'status' => 'in:aktif,nonaktif',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nim' => 'required|numeric|unique:mahasiswa,nim,' . $mahasiswa->id,
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'nullable|in:L,P',
            'alamat' => 'required',
            'no_telepon' => 'nullable',
            'email' => 'required|email|unique:mahasiswa,email,' . $mahasiswa->id,
            'program_studi' => 'required',
            'status' => 'in:aktif,nonaktif',
        ]);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
