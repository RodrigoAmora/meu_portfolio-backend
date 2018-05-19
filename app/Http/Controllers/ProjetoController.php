<?php 
namespace App\Http\Controllers;

use App\Http\Services\ProjetosServices;

class ProjetoController extends Controller {

	public function listarTodosOsProjetos() {
		$projetosService = new ProjetosServices();
        $projetosFreela = $projetosService->listarProjetosFreelancer();
        $projetosPessoais = $projetosService->listarProjetosPessoais();
		return view('projetos')->with(['projetosFreela' => $projetosFreela, 'projetosPessoais' => $projetosPessoais]);
	}

}