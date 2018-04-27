<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProjetoController extends Controller {

	public function listarTodosOsProjetos() {
        $projetosFreela = DB::select('select * from trabalhos_freelancer');
        $projetosPessoais = DB::select('select * from trabalhos_pessoais');
		return view('projetos')->with(['projetosFreela' => $projetosFreela, 'projetosPessoais' => $projetosPessoais]);
	}

}