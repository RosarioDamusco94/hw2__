<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrello extends Model {

   protected $table = 'carrello';

   protected $fillable = ['id_prodotto', 'immagine', 'nome_prodotto', 'ordinato_da', 'prezzo'];

   public $timestamps = false;

   public function products(){
      return $this->hasMany("Product");
  }
}
?>