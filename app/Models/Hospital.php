<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'location_id',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'update_at' => 'datatime',
        ]
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
