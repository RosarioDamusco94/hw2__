<?php

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SignupController extends Controller{

    protected function create(){
        
        $request = request();
        
        $username = User::where('username', request('username'))->first();
        $pw_lenght = strlen($request->password);

        if(isset($username)){
            $errore_username = "";
            return view('signup')
                ->with('errore_username', $errore_username);
              
        }else{
            if($pw_lenght<6){
                $errore_password = "";
                return view('signup')
                ->with('errore_password', $errore_password);
      
            } else {
                $newUser = User::create([
                'nome' => $request['nome'],
                'cognome' => $request['cognome'],
                'codice_fiscale' => $request['codice_fiscale'],
                'username' => $request['username'],
                'password' => Hash::make($request['password'])
                ]);

            if ($newUser) {
                Session::put('id', $newUser->id);
               return redirect('home');
           } 
            else {
               return redirect('signup');
           }
      
    }}}

    public function index() {
        return view('signup');
    } 
}


?>