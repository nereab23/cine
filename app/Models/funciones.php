<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funciones extends Model
{
   protected $table = 'funciones';
   protected $primarykey = 'id';
   protected $fillable = ['fecha','hora',];
}

