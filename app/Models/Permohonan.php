<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nip',
        'jabatan',
        'lama_cuti',
        'alasan',
    ];
}