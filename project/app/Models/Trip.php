<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_country',
        'name',
        'period',
        'continent',
        'description',
        'price',
    ];

    protected $attributes = [
        'period' => 7,
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'id_country');
    }
}
