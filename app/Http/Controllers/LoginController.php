<?php
namespace estoque\Http\Controllers;

use Request;
use Auth;

class LoginController extends Controller
{
    public function form(){
    	return view('form_login');
    }

    public function login(){
    	$credenciais = Request::only('email','password');

    	if (Auth::attempt($credenciais)){
    		return 'Está logado';
    	}

    	return 'Usuário não existe';
    }


}
