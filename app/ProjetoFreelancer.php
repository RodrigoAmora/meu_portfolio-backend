<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjetoFreelancer extends Model {

    protected $table = 'trabalhos_freelancer';
    public $timestamps = false;

 	protected $guarded = ['id'];
 	
}
