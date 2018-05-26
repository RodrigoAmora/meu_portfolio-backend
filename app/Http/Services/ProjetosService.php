<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\DB;

use App\ProjetoFreelancer;
use App\ProjetoPessoal;

class ProjetosService {
	
	public function listarProjetosFreelancer() {
		//return DB::select('select * from trabalhos_freelancer');
		return ProjetoFreelancer::all();
	}

	public function listarProjetosPessoais() {
		return ProjetoPessoal::all();
	}

	public function listarProjetosPessoaisAPI() {
		$projetosPessoais = ProjetoPessoal::all();
		$projetosFreelancer = ProjetoFreelancer::all();
    	//return response()->json([$projetosPessoais, $projetosFreelancer]);
    	return response()->json($projetosPessoais);
	}

}