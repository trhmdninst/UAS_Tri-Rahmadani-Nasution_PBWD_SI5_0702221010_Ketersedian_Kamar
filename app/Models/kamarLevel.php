<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamarLevel extends Model
{
    use HasFactory;
    
    protected $fillable = ['level_name'];

    public function kamar()
    {
        return $this->hasMany(kamar::class);
    }
}
