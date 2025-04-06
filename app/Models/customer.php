<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Tentukan atribut yang dapat diisi (fillable) jika diperlukan
    protected $fillable = [
        // Tambahkan kolom tabel seperti 'name', 'email', dll.
    ];
}
