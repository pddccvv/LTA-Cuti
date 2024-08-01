<?php
namespace App\Http\Controllers;

use App\Models\Permohonan;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    public function index()
    {
        $permohonans = Permohonan::all();
        return view('pages.admin.verifikasi', compact('permohonans'));
    }

    public function create()
    {
        return view('pages.pegawai.permohonanCuti');
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

        return redirect()->route('pages.pegawai.cekStatus')
            ->with('success', 'Permohonan created successfully.');
    }
public function updateStatus($id)
{
    $permohonan = Permohonan::findOrFail($id);
    // Misalkan kita ingin mengganti status menjadi 'disetujui' sebagai contoh
    $permohonan->status = 'disetujui';
    $permohonan->save();

    return redirect()->route('permohonan.index')
        ->with('success', 'Status permohonan diperbarui.');
}



    public function cekStatus()
    {
        $permohonans = Permohonan::all();
        return view('pages.pegawai.cekStatus', compact('permohonans'));
    }
}