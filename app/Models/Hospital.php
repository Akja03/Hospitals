<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location'];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    } 
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }  
    
    public function appointmen()
    {
        return $this->hasMany(Appointmen::class);  
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
