<?php 
namespace App\Http\Controllers;

use App\Http\Services\ProjetosService;

class ProjetoController extends Controller {

	public function listarTodosOsProjetos() {
		$projetosService = new ProjetosService();
        $projetosFreela = $projetosService->listarProjetosFreelancer();
        $projetosPessoais = $projetosService->listarProjetosPessoais();
		return view('projetos/projetos')->with(['projetosFreela' => $projetosFreela, 'projetosPessoais' => $projetosPessoais]);
	}

}