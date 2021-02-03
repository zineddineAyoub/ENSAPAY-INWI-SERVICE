<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    //
    protected $table = 'forms';
    private $connection = 'mongodb';
    protected $fillable =['id','label','codeCreance'];
    private $guarded = [];
}
