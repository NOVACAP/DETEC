<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionProcess extends Model
{
    use HasFactory;

    public function sections(){
        return $this->belongsToMany(Section::class);
    }

    public function processes(){
        return $this->belongsToMany(Process::class);
    }
}
