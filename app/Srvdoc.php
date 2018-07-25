<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Srvdoc extends Model
{
    protected $table = "srvdocs";

	protected $fillable = ['nombre','abreviatura','descripcion','logo','link','prioridad','idServicio',];

	public function servicio()
	{
		return $this->belongsTo('App\Servicio');
	}   
}
