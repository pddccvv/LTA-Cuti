<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    public function index()
    {
        $permohonans = Permohonan::all();
        return view('admin.verifikasi', compact('permohonans'));
    }

    public function create()
    {
        return view('pegawai.permohonanCuti');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'lama_cuti' => 'required|integer',
            'alasan' => 'required|string',
        ]);

        Permohonan::create($request->all());

        return redirect()->route('index')
            ->with('success', 'Permohonan created successfully.');
    }
}