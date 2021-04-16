<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    public $timestamps=false;
	public $fillable= ['nom', 'body', 'lieu', 'prix', 'date_debut'];
	protected $dates= ['date_debut'];

	public function isFormatPrice()
	{
		return $this->prix==0;
	}

	public function getPriceAttribute($value)
	{
		return $value+1;
	}
}

?>