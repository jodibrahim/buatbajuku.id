<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiketDetail extends Model
{
    public function turnamen()
	{
	      return $this->belongsTo('App\turnamen','turnamen_id', 'id');
	}

	public function tiket()
	{
	      return $this->belongsTo('App\tiket','tiket_id', 'id');
	}
}
