<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'telepon'];

    public function pemesanans()
    {
        return $this->hasMany(pemesanan::class);
    }
}
