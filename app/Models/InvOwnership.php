<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvOwnership extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'added_by'];
    protected $dates = ['deleted_at'];
}
