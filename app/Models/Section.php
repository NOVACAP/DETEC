<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['section_name' , 'coordinator_name' ];
    use HasFactory;

    public function section_processes(){
        return $this->hasMany(SectionProcess::class);
    }

    

}
