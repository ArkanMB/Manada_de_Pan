<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'breed', 'sex', 'age', 'animal_type_id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function animaltype() 
    {
        return $this->belongsTo(AnimalType::class, 'animal_type_id');
    }
}
