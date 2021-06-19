<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    //public $timestamp = false;

    protected $table = 'products';

    public $timestamps = false;

    protected $fillable = ['id_prodotto', 'immagine', 'nome_prodotto', 'descrizione', 'prezzo'];

    public function user(){
        return $this->belongsTo("User");
    }

    public function carrello(){
        return $this->belongsTo("Carrello");
    }
}

?>