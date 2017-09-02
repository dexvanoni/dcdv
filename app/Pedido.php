<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;

class Pedido extends Model
{

  public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }


  protected $fillable = [
      'idCliente', 'produto', 'qnt', 'precoUn', 'precoTot', 'pagamento', 'created_at', 'updated_at',
  ];
}
