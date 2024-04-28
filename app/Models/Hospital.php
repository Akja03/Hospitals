<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
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

    public function appointmen()
    {
        return $this->hasMany(Appointmen::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function patient()
    {
        return $this->hasMany(Patient::class);
    }
}
