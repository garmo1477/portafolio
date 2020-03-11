<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	//protected $fillable = ['title','description','url'];
	protected $guarded = [];
	public function getRouteKeyName()
	{
		//por defecto se devuelve el string id, pero se puede cambiar aquí por otro nombre
		return 'url';
		//return 'title' buscamos por el titulo del proyecto o otro campo. Se podrá buscar por el titulo del proyecto en el navegador
	}
}
