<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CliensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $client1 = array("idPayment" => "IP11",
        "fixeNumber" => "0520202020","phoneNumber" => "0620202020","firstName" =>"Ayoub", "lastName" => "Zineddine");

        $client2 = array("idPayment" => "IP22",
        "fixeNumber" => "0530303030", "phoneNumber" => "0630303030","firstName" =>"Tarik", "lastName" => "Ouhamou");

        DB::table('clients')->insert($client1);
        DB::table('clients')->insert($client2);

        $client1 = DB::table('clients')->where('idPayment','IP11')->first();
        $client2 = DB::table('clients')->where('idPayment','IP22')->first();

         $idClient1 = (string) $client1["_id"];
         $idClient2 = (string) $client2["_id"];

           $bill1C1 = array('billingDate' => '2020-01-01','amount'=> 200, 'codeCreance' =>"inwi2001",'idClient'=>$idClient1,'payed'=>false);
           $bill2C1 = array('billingDate' => '2020-02-02','amount'=> 300, 'codeCreance' =>"inwi2003",'idClient'=>$idClient1,'payed'=>false);

           $bill1C2 = array('billingDate' => '2020-01-01','amount'=> 200, 'codeCreance' =>"inwi2001",'idClient'=>$idClient2,'payed'=>false);
           $bill2C2 = array('billingDate' => '2020-02-02','amount'=> 300, 'codeCreance' =>"inwi2003",'idClient'=>$idClient2,'payed'=>true);

           DB::table('bills')->insert($bill1C1);
           DB::table('bills')->insert($bill2C1);

           DB::table('bills')->insert($bill1C2);
           DB::table('bills')->insert($bill2C2);
    }
}
