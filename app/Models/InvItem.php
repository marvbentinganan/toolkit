<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class InvItem extends Model
{
    use SoftDeletes;

    protected $fillable = ['type', 'supplier', 'manufacturer', 'state', 'ownership', 'image', 'serial', 'model', 'barcode', 'desciption', 'capacity', 'remarks', 'added_by'];

    protected $dates = ['deleted_at'];

    public function setAddedByAttribute($value)
	{
		$this->attributes['added_by'] = Auth::user()->id;
	}
}
