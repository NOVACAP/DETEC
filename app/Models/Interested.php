<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interested extends Model
{
    protected $fillable = ['interested_name'];
    use HasFactory;
}
