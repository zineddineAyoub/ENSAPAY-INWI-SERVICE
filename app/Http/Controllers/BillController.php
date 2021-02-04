<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Client;
use App\Bill;
use Illuminate\Support\Facades\DB;
class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bills = DB::table('bills')->get();

        return $bills;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $int = (int)$id;
        $bill = DB::table('bills')->where('id','=',$int)->first();
        return $bill;

       /* $client = DB::table('clients')->where('idPayment',$id)->first();
        $idClient = (string) $client["_id"];

        $bills = DB::table('bills')->where('idClient',$idClient)->where('payed',false)->get();
        return $bills;
       // $client1->Bills();
        return $client1;*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $int = (int)$id;
         DB::table('bills')->where('id','=',$int)->update(['isBatched'=>true]);
         $return = DB::table('bills')->where('id','=',$int)->first();
         return $return;

    }

    public function payBill($id){
        $int = (int)$id;
         DB::table('bills')->where('id','=',$int)->update(['payed'=>true,'payedDate'=>date('Y-m-d')]);
        return  DB::table('bills')->where('id','=',$int)->first();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
