<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Http\Services\ProjetosService;

class ProjetosTest extends TestCase {

    public function testListarProjetosFreelancer() {
    	$service = new ProjetosService();
    	$projetos = $service->listarProjetosFreelancer();
    	$this->assertNotEquals(0, count($projetos));
    }

}
