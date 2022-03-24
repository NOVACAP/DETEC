<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model

{
    protected $fillable = ['employer_name' , 'employer_registration' , 'employer_function' , 'demands_employer_id' ];

    public function demandEmployers(){
        return $this->belongsToMany(DemandEmployer::class , 'foreign_key');
    }

    public function employerType(){
        return $this->belongsTo(EmployerType::class , 'foreign_key');
    }

    public function user(){
        return $this->belongsTo(Employer::class , 'foreign_key');
    }

    use HasFactory;
}
