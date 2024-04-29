<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
    ];

    public $timestamps =false;

    public function Hospital()
    {
        return $this->hasMany(Hospital::class);
    }
}
