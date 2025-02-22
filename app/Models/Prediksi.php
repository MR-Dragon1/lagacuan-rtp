<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prediksi extends Model
{
    use HasFactory;

    protected $table = 'table_prediksi';

    protected $fillable = [
        'id',
        'pasaran_id',
        'angka_main',
        'top_4d',
        'top_3d',
        'top_2d',
        'colok_bebas',
        'colok_2d',
        'shio_jitu',
        'created_at',
    ];

    public function pasarans()
    {
        return $this->belongsTo(Pasaran::class);
    }

    public function pasaran()
    {
        return $this->hasOne(Pasaran::class, "id", "pasaran_id");
    }

    public function getCreatedAtAttribute($value)
    {
        $carbonDate = Carbon::parse($value);
        setlocale(LC_TIME, 'id_ID'); // Atur lokal ke bahasa Indonesia
        $carbonDate->setTimezone('Asia/Jakarta'); // Atur zona waktu
        return $carbonDate->translatedFormat('l, d F Y');
    }
}
