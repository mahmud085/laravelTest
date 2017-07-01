<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $primarykey = 'id';
    protected $table = 'blogs';
    protected $fillable = array('title','content');
}
