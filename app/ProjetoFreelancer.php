<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjetoFreelancer extends Model {

    protected $table = 'trabalhos_freelancer';
    public $timestamps = false;

	//protected $fillable = array('nome', 'desc', 'link', 'img');
 	protected $guarded = ['id'];
 	
}
