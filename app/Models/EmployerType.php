<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerType extends Model
{
    public function employers(){
        return $this->hasMany(Employer::class , 'foreign_key');
    }

    use HasFactory;
}
