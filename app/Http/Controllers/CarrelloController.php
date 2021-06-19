<?php

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Carrello;
use App\Models\Riepilogo;


class CarrelloController extends Controller {
    public function AcquistaProdotti($id, Request $request){

        $prodotto = Product::where('id_prodotto', $id)->get('id_prodotto')->first();
        $id_prodotto = $prodotto['id_prodotto'];

        $immagine = $prodotto->where('id_prodotto', $id)->pluck('immagine')->first();
        
        $nome_prodotto = $prodotto->where('id_prodotto', $id)->pluck('nome_prodotto')->first();

        $user = $request->session()->get('id');
        $ordinato_da = User::where('id', $user)->pluck('username')->first();

        $prezzo = Product::where('id_prodotto', $id)->pluck('prezzo')->first();

        if($user != null){
        $newInserimento = Carrello::create([
            'id_prodotto' => $id_prodotto,
            'immagine' => $immagine,
            'nome_prodotto' => $nome_prodotto,
            'ordinato_da' => $user,
            'prezzo' => $prezzo
        ]);
        }

        if(isset($newInserimento)){
            $totale = Carrello::where('ordinato_da', $user)->sum('prezzo');
            Riepilogo::where('utente', $user)->delete();
            Riepilogo::create([
                'utente' => $user,
                'prezzo_totale' => $totale
            ]);
        }
    }

    public function carrello(Request $request){
        $user = $request->session()->get('id');
        $carrello = Carrello::where('ordinato_da', $user)->get();
        return $carrello;
    }

    public function eliminaProdotto($id_vendita, Request $request){
        $user = $request->session()->get('id');
        $carrello = Carrello::where('ordinato_da', $user)->get();
        $elimina = Carrello::where('ordinato_da', $user)->where('id_vendita', $id_vendita)->delete();
        if(isset($elimina)){
            $totale = Carrello::where('ordinato_da', $user)->sum('prezzo');
            Riepilogo::where('utente', $user)->delete();
            Riepilogo::create([
                'utente' => $user,
                'prezzo_totale' => $totale
            ]);
        }
        return $carrello;
    }

    public function prezzoTotale(Request $request){
        $user = $request->session()->get('id');
        $riepilogo = Riepilogo::where('utente', $user)->get();
        return $riepilogo;
    }

    public function index(){
        $session_id = session('id');
        $user = User::find($session_id);
        
        if (!isset($user))
            return redirect('login');        
        return view("carrello");
    }
}
?>