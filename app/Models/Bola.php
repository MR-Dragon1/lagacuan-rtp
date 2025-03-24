<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bola extends Model
{
    use HasFactory;

    protected $table = 'table_bola';

    protected $fillable = [
        'id',
        'liga',
        'tanggal_waktu',
        'pertandingan',
        'skor',
        'created_at',
    ];

}
