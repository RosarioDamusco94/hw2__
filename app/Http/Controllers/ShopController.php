<?php

use Illuminate\Routing\Controller;
use App\Models\Product;
use App\Models\User;

class ShopController extends Controller {

    public function ListaProdotti() {
        $prodotto = Product::all();
        return $prodotto;
    }

    public function index(){
        $session_id = session('id');
        $user = User::find($session_id);
        
        if (!isset($user))
            return redirect('login');        
        return view("shop");
    }
}
?>

