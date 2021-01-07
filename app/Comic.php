<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'author'=> 'required',
        'publisher'=>'required',
        'number'=>'required',
        'favorite'=>'required',
    );
}
