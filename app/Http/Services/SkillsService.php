<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\DB;
use App\Skill;

class SkillsService {
	
	public function listarBancosDeDados() {
		return Skill::where("tipo", "database")->get();
	}

	public function listarFrameworks() {
		return Skill::where("tipo", "framework")->get();
	}

	public function listarLinguagens() {
		return Skill::where("tipo", "language")->get();
	}
}