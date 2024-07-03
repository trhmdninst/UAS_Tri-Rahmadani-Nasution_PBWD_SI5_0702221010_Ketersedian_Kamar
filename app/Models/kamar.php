<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;
    
    protected $fillable = ['nomor_kamar', 'level_id', 'is_available'];

    public function level()
    {
        return $this->belongsTo(kamarLevel::class);
    }

    public function pemesanan()
    {
        return $this->hasMany(pemesanan::class);
    }

}
