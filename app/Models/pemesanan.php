<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;

    protected $fillable = ['id_pasien', 'id_kamar', 'tanggal_check-in', 'tanggal_check-out'];
    
    public function pasien()
    {
        return $this->belongsTo(pasien::class);
    }

    public function kamar()
    {
        return $this->belongsTo(kamar::class);
    }
}
