<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $table = 'clients';
    protected $connection = 'mongodb';
    protected $fillable =['id','idPayment','firstName','lastName','phoneNumber','fixeNumber'];


    public function Bills(){
        return $this->hasMany('App\Bill');
    }
}
