<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'code',
        'currency',
        'surface',
        'language',
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
