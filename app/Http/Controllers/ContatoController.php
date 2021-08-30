<?php namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContatoController extends Controller {

	public function contato() {
		return view('contato');
	}

	public function enviarEmail(Request $request) {
        $email = $request->email;
        $nome = $request->nome;
        $assunto = $request->assunto;
        $msg = $request->mensagem;

        $msg = "Nome: ".$nome."\nE-mail: ".$email."\n\n".$request->mensagem;

        Mail::raw($msg, function ($message) use($msg, $email, $nome, $assunto) {
            $message->from('rodrigo.amora.freitas@gmail.com', 'Rodrigo Amora')->to('rodrigo.amora.freitas@gmail.com')->subject($assunto);
        });

        return view('contato');
    }   
}