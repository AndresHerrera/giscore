<?php

namespace GisCore;

use Illuminate\Database\Eloquent\Model;



class Role extends Model
{
    public function users()
	{
	  return $this
	    ->belongsToMany('GisCore\User')
	    ->withTimestamps();
	}


	public function countRoles()
	{
	  return $this->where('id','>=','1')->count();
	}

}
