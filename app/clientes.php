<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    public function scopeName($query, $name)
    {
    	$query->where('name', $name);
    }
}
