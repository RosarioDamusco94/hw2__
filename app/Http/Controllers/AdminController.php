<?php

use Illuminate\Routing\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller {

    public function index(Request $request){
        
        $user = $request->session()->get('id');
        $name_admin = User::where('id', $user)->pluck('username')->first();
        
        if ($name_admin!=='amministratore')
            return redirect('home');        
        return view("admin");
    }

    public function addProdotti(Request $request){
        $user = $request->session()->get('id');
        $name_admin = User::where('id', $user)->pluck('username')->first();
        if($name_admin==='amministratore'){
            $id_prodotto = $request->id_prodotto;
            $immagine = $request->immagine;
            $nome_prodotto = $request->nome_prodotto;
            $descrizione = $request->descrizione;
            $prezzo = $request->prezzo;

            echo $immagine;
            echo $nome_prodotto;
            echo $descrizione;
            echo $prezzo;

            Product::create([
                'id_prodotto'=>$id_prodotto,
                'immagine'=>$immagine,
                'nome_prodotto'=>$nome_prodotto,
                'descrizione'=>$descrizione,
                'prezzo'=>$prezzo
            ]);
            return redirect('shop');
    }

    
}
}
?>

