<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
    	$frameworks = DB::select("select * from skills where tipo='framework'");
    	$linguagens = DB::select("select * from skills where tipo='language'");
    	$databases = DB::select("select * from skills where tipo='database'");
    	return view('body')->with(['linguagens' => $linguagens, "frameworks" => $frameworks, "databases" => $databases]);
    }
}
