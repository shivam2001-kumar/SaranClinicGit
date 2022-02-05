<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicineStock;

use Session;
use Log;

class StockmanagerController extends Controller
{
    //
    public function dashboard()
    {
        return view('stockmanager.dashboard');
    }
    public function addstock()
    {
        return view('stockmanager.add_stock');
    }
    public function saveStock(Request $req)
    {
        $data = new MedicineStock;
        $data->medcode=$req->get('medcode');
        $data->medname=$req->get('medname');
        $data->medtype=$req->get('medtype');
        $data->medunit=$req->get('medunit');
        $data->price=$req->get('price');
        $data->medquantity=$req->get('medquantity');
        $data->totalquantity=$req->get('totalquantity');
        $data->totalprice=$req->get('totalprice');
        $tq=floatval($req->get('totalquantity'));
        $am=floatval($req->get('totalprice'));

        $perqtamt=$am/$tq;
 // return $perqtamt;
 $data->perqtamount=$perqtamt;
        $data->isdel=false;
        Log::info('data'.json_encode($data));
        if($data->save())
        {
            Session::flash('status', 'alert-success');
            Session::flash('flash_message', 'Medicine Successfully Add!!!');
            return redirect('/stockmanager/add-stock'); 
        }
        else
        {
            Session::flash('status', 'alert-danger');
            Session::flash('flash_message', 'Medicine Not Add!!');
            return redirect('/stockmanager/add-stock');
        }
    }
    public function viewstock()
    {
        $stock=MedicineStock::where('isdel',false)->get();
        return view('stockmanager.view_stock',['stock'=>$stock]);
    }
    public function saveUpdateStock(Request $req)
    {
       // Log::info('data'.json_encode($req->all()));
       $id=$req->get('id');
       $medcode=$req->get('medcode');
       $medname=$req->get('medname');
       $medtype=$req->get('medtype');
       $medunit=$req->get('medunit');
       $price=$req->get('price');
       $medquantity=$req->get('medquantity');
       $totalquantity=$req->get('totalquantity');
       $totalprice=$req->get('totalprice');
    //    Log::info('data',[
    //        $medcode,$medname,$medtype,$medunit,$price,$medquantity,$totalquantity,$totalprice
    //    ]);
        $uptstock = MedicineStock::where('id',$id)->update(['medcode'=>$medcode,'medname'=>$medname,'medtype'=>$medtype,'medunit'=>$medunit,'price'=>$price,'medquantity'=>$medquantity,'totalquantity'=>$totalquantity,'totalprice'=>$totalprice]);
        if($uptstock)
        {
            Session::flash('status','alert-success');
            Session::flash('flash_message','Details Successfully Updated!');
            return redirect('/stockmanager/view-stock');
        }
        else
        {
            Session::flash('status','alert-danger');
            Session::flash('flash_message','Details Not Updated!');
            return redirect('/stockmanager/view-stock');
        }
    }
    public function updatestock($id)
    {
        Log::info('id'.json_encode($id));
        $stock=MedicineStock::where('isdel',false)->where('id',$id)->first();
        return view('stockmanager.update_stock',['stock'=>$stock]);
    }
}