<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjetoPessoal extends Model {

    protected $table = 'trabalhos_pessoais';
    public $timestamps = false;

	//protected $fillable = array('nome', 'desc', 'link', 'img');
 	protected $guarded = ['id'];

}
