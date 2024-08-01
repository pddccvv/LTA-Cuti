<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $table = 'permohonan'; // Pastikan nama tabel sesuai
    protected $fillable = [
    'nama',
    'nip',
    'jabatan',
    'lama_cuti',
    'alasan',
    'status',
    ];

    protected $attributes = [
    'status' => 'menunggu', // Nilai default untuk status
    ];
}