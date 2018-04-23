<?php namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
//use Weblee\Mandrill\Mail;

class ContatoController extends Controller {

	public function contato() {
		view('contato');
	}

	public function enviarEmail(Request $request) {
        /*
        $template_name = 'hola mundo';
        $template_content = array(
            array(
                'name' => 'test',
                'content' => 'test'
            )
        );
        $message = array(
            'to' => array(
                array(
                    'email' =>  'rodrigo.amora.freitas@gmail.com',
                    'name'  =>  'bhjbhj',
                    'type'  => 'to'
                )
            )
        );
        \MandrillMail::messages()->sendTemplate($template_name, $template_content, $message);
        */

        $msg = $request->mensagem;
        $email = $request->email;
        $nome = $request->nome;
        $assunto = $request->assunto;
        $msg = $request->mensagem;

        Mail::raw($msg, function ($message) use($msg, $email, $nome, $assunto) {
            $message->from('rodrigo.amora.freitas@gmail.com', 'Rodrigo Amora')->to('rodrigo.amora.freitas@gmail.com')->subject($assunto);
        });

        return view('contato');
    }
}