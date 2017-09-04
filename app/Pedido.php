<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;
use App\Produto;

class Pedido extends Model
{

  public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

  public function produtos()
  {
    return $this->hasMany(Produto::class);
  }

  protected $fillable = [
      'idCliente', 'produto', 'qnt', 'precoUn', 'precoTot', 'pagamento', 'created_at', 'updated_at',
  ];
}
