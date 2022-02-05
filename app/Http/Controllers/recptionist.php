<?php

namespace App\Http\Controllers;
use App\Models\tbl_reciept;
use App\Models\patient;
use Illuminate\Http\Request;

class recptionist extends Controller
{
    //
    function  dashboard()
    {
        return view('recptionist.dashboard');
    }
    // Leatest Reciept

    function  todayrecpt()
    {
        $tr=tbl_reciept::join('patients','patients.id','tbl_reciepts.patient_id')
        ->where('tbl_reciepts.is_del',false)->where('tbl_reciepts.date',date('Y-m-d'))->get();
        //return $tr;  
        return view('recptionist.todayreciept',['data'=>$tr]);
    }


    //todayreciepts

    function todayreciepts($rid,$pid)
    {
        $pt=patient::where('is_del',false)->where('id',$pid)->get();
        //return $pt;
        $mt=tbl_reciept::join('tbl_reciepts_medicines','tbl_reciepts_medicines.reciept_id','tbl_reciepts.reciept_id')
        ->join('medicine_stocks','medicine_stocks.id','tbl_reciepts_medicines.id')
        ->where('tbl_reciepts.is_del',false)->where('tbl_reciepts.reciept_id',$rid)->get();
       // return $mt;
       return view('recptionist.recieptbill',['data'=>$mt,'pdata'=>$pt]);

    }

    // bill 

    function bill($id)
    {
        //echo $id; 
        //echo "gjhghg";
   
    }

}
