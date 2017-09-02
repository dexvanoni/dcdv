<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pedido;

class Cliente extends Model
{

  public function pedidos()
   {
       return $this->hasMany(Pedido::class);
   }

  protected $fillable = [
      'nome', 'rua', 'numero', 'bairro', 'tel', 'localTrabalho', 'created_at', 'updated_at',
  ];
}
