<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesanans extends Model
{
    public function user()
	{
	      return $this->belongsTo('App\User','user_id', 'id');
	}

	public function pesanan_details()
	{
	      return $this->hasMany('App\pesananDetails','pesanan_id', 'id');
	}
}
