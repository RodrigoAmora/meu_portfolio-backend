<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\DB;

class ProjetosServices {
	
	public function listarProjetosFreelancer() {
		return DB::select('select * from trabalhos_freelancer');
	}

	public function listarProjetosPessoais() {
		return DB::select('select * from trabalhos_pessoais');
	}

}