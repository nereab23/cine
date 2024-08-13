<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
   protected $table = 'reservas';
   protected $primarykey = 'id';
   protected $fillable = ['asientos',];
}

