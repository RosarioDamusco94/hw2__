<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riepilogo extends Model {

   protected $table = 'riepilogo';

   protected $fillable = ['utente', 'prezzo_totale'];

   public $timestamps = false;
}
?>