<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{   
	protected $fillable= [
      'id','nome','cpf','usuario','senha','nivel'
    ];
    protected $table='usuarios'; 
	public $timestamps = true;
    use HasFactory;
}
