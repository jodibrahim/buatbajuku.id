<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class katalogs extends Model
{
    public function pesanan_details()
	{
	      return $this->hasMany('App\pesananDetails','katalog_id', 'id');
	}
}
