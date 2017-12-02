<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvSupplier extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'contact_number', 'added_by'];
    protected $dates = ['deleted_at'];
}
