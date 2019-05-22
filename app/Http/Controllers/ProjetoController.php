<?php 
namespace App\Http\Controllers;

use App\Http\Services\ProjetosService;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ProjetoController extends Controller {

	public function listarTodosOsProjetos() {
		$projetosService = new ProjetosService();
        $projetosFreela = $projetosService->listarProjetosFreelancer();
        $projetosPessoais = $projetosService->listarProjetosPessoais();
		return view('projetos/projetos')->with(['projetosFreela' => $projetosFreela, 'projetosPessoais' => $projetosPessoais]);
	}

	public function salvarProjeto(Request $request) {
		$image = $request->file('photo');
    	$imagename = time().'.'.$image->getClientOriginalExtension();
    	$destinationPath = public_path('/img/portfolio');
    	$image->move($destinationPath, $imagename);
    	return back()->with('success','Image Upload successful');
	}
}