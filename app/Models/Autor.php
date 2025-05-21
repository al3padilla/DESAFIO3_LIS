<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores';
	protected $primaryKey = 'codigo_autor';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
        'codigo_autor',
		'nombre_autor',
		'nacionalidad'
	];

	public function libros()
	{
		return $this->hasMany(Libro::class, 'codigo_autor');
	}
}
