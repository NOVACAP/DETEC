<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Demand;



class Activity extends Model
{
    protected $fillable = ['activity_name'];

    use HasFactory;

    /*public function demands(){
        return $this->belongsToMany(Demands::class);
    }
    */
}
