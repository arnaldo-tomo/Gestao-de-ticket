<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class suporte extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['suporte', 'status'];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    // public function users()
    // {
    //     return $this->belongsToMany('App\Models\User');
    // }
}
