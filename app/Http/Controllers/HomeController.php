<?php

use Illuminate\Routing\Controller;
use App\Models\User;

class HomeController extends Controller {

    public function Home() {
        $session_id = session('id');
        $user = User::find($session_id);
        if (!isset($user))
            return redirect('login');        
        return view("home")->with("nome", $user->username);
    }
}
?>