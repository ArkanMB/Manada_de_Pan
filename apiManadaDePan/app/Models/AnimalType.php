<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalType extends Model
{
    use HasFactory;

    protected $fillable = ['type'];
    protected $hidden = ['created_at', 'updated_at'];

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
}
