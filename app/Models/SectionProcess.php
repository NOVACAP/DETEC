<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionProcess extends Model
{
    protected $fillable = ['sections_id' , 'processes_id' ];
    use HasFactory;

    public function processes(){
        return $this->hasMany(Process::class);
    }
}
