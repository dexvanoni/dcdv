<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
  protected $fillable = [
      'nome', 'valorUn', 'tipo', 'created_at', 'updated_at',
  ];
}
