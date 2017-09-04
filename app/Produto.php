<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
  public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
  protected $fillable = [
      'nome', 'valorUn', 'tipo', 'created_at', 'updated_at',
  ];
}
