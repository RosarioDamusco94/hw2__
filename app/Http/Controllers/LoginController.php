<?php

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function Login(){
        if(session('id') != null){
            return redirect("home");
        }else{
            $old_username = Request::old('username');
            return view('login')
                ->with('csrf_token', csrf_token())
                ->with('old_username', $old_username);
        }
    }

    public function CheckLogin(){
        
        $user = User::where('username', request('username'))->first();
        $hash = User::where('username', request('username'))->pluck('password')->first();
        $pw_input = request('password');
        $password = Hash::check($pw_input, $hash);
                
        if(isset($user) && $password){
            Session::put('id', $user->id);
            return redirect('home');
        } else {
            
            return redirect('login')->withInput();
        }
    }

    public function Logout(){
        Session::flush();
        return redirect("login");
    }
}