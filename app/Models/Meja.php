<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    protected $table = 'meja'; // nama tabel (karena tidak jamak)

    protected $fillable = [
        'merkmeja',
        'hargameja',
        'tersedia',
        'berat',
    ];

    public $timestamps = false; // karena di tabel nggak ada created_at/updated_at
}
