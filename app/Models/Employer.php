<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Demand;


class Employer extends Model

{
    protected $fillable = ['employer_name' , 'employer_registration' , 'employer_function' , 'demands_employer_id' ];

    public function demandEmployers(){
        return $this->hasMany(DemandEmployer::class ,'id' , 'demands_employer_id ');
    }

    public function employerType(){
        return $this->hasOne(EmployerType::class , 'id' , 'employer_type_id');
    }

    public function user(){
        return $this->belongsTo(Employer::class , 'id' , 'user_id');
    }

    public function demands(){
        return $this->belongsToMany(Demand::class);
    }

    use HasFactory;
}
