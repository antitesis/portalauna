<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Srvnpscore extends Model
{
    protected $table = "srvnpscores";

	protected $fillable = ['nombre','tipo','año','localidad','frecuencia','origen','contacto','link','idServicio',];

	public function servicio()
	{
		return $this->belongsTo('App\Servicio');
	}    
}
