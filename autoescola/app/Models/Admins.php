<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{   
	protected $fillable = [
       'id_admin',
       'nome_admin',
       'idade',
       'usuario_admin'
	];

	protected $admins;

    use HasFactory;
}
