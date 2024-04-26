<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'address',
        'city',
        'country',
        'postal_code',
    ];
    public $timestamps =false;

    public function hospital()
    {
        return $this->hasMany(Hospital::class);
    }
}
