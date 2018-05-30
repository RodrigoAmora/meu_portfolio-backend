<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\DB;

use App\ProjetoFreelancer;
use App\ProjetoPessoal;

class ProjetosService {
	
	public function listarProjetosFreelancer() {
		return ProjetoFreelancer::all();
	}

	public function listarProjetosPessoais() {
		return ProjetoPessoal::all();
	}

	public function listarProjetosPessoaisAPI() {
		$projetosPessoais = ProjetoPessoal::all();
    	return response()->json($projetosPessoais);
	}

}