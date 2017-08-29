<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
  protected $fillable = [
      'idCliente', 'produto', 'qnt', 'precoUn', 'precoTot', 'pagamento', 'created_at', 'updated_at',
  ];
}
