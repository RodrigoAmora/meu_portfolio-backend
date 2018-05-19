<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Services\SkillsService;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
    	$skillsServices = new SkillsService();
    	$databases = $skillsServices->listarBancosDeDados();
    	$frameworks = $skillsServices->listarFrameworks();
    	$linguagens = $skillsServices->listarLinguagens();
    	return view('body')->with(['linguagens' => $linguagens, "frameworks" => $frameworks, "databases" => $databases]);
    }
}
