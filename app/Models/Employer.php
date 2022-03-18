<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model

{
    protected $fillable = ['employer_name' , 'employer_registration' , 'employer_function' , 'demands_employer_id' ];

    public function demandEmployers(){
        return $this->belongsToMany(demandEmployer::class);
    }

    use HasFactory;
}
