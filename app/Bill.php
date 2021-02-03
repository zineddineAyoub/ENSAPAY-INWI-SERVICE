<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $table = 'bills';
    protected $connection = 'mongodb';
    protected $fillable =['id','amount','codeCreance','billingDate','payedDate','payed','idClient','isBatched'];


    public function client(){
        return $this->belongsTo('App\Client','idClient');
    }
}
