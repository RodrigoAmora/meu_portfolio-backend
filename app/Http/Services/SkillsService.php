<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\DB;

class SkillsService {
	
	public function listarBancosDeDados() {
		return DB::select("select * from skills where tipo='database'");
	}

	public function listarFrameworks() {
		return DB::select("select * from skills where tipo='framework'");
	}

	public function listarLinguagens() {
		return DB::select("select * from skills where tipo='language'");
	}
}