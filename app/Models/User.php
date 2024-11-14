<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

  // Adiciona a propriedade $fillable com os campos que podem ser preenchidos
  protected $fillable = [
    'name',
    'email',
    'password',
];
}
