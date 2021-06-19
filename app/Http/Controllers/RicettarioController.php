<?php

use Illuminate\Routing\Controller;
use App\Models\User;

class RicettarioController extends Controller {

    

    public function index(){
        $session_id = session('id');
        $user = User::find($session_id);
        if (!isset($user))
            return redirect('login');        
        return view("ricettario");
    }
    public function curl($ricerca){
        $api_key = '347b115b5a104879886af3e9c95cca56';
        $curl = curl_init(); 
        curl_setopt($curl, CURLOPT_URL, "https://api.spoonacular.com/food/ingredients/search?query=".$ricerca."&apiKey=".$api_key);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }

}
?>

