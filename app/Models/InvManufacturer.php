<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvManufacturer extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'website', 'email', 'contact_number','added_by'];
    protected $dates = ['deleted_at'];

    public function type(){
    	return $this->belongsToMany('App\Models\InvType');
    }
}
