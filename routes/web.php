<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\SupervisorCont;
use App\Http\Controllers\StockmanagerController;
use App\Http\Controllers\recptionist;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/superadmin',[SuperadminController::class,'index']);
Route::post('/superadminlogin',[SuperadminController::class,'superadminlogin']);
//admin route with middleware
Route::group(['middleware'=>['admin']],function(){

Route::get('/superadmin/supdash',[SuperadminController::class,'dashboard']);
Route::get('/superadmin/addsupervisor',[SuperadminController::class,'addsupervisor']);
Route::post('/superadmin/addsupercode',[SuperadminController::class,'addsupercode']);
Route::get('/superadmin/viewsupervisor',[SuperadminController::class,'viewsupervisor']);
Route::get('/superadmin/updatesupervisor/{id}/{status}',[SuperadminController::class,'updatesupervisor']);
Route::get('/superadmin/delsupervisor/{id}',[SuperadminController::class,'delsupervisor']);
Route::get('/superadmin/addpatient',[SuperadminController::class,'addpatient']);
Route::post('/superadmin/addpatientcode',[SuperadminController::class,'addpatientcode']);
Route::get('/superadmin/viewpatient',[SuperadminController::class,'viewpatient']);
Route::get('/superadmin/editpatient/{id}',[SuperadminController::class,'editpatient']);
Route::post('/superadmin/editpostpatientcode',[SuperadminController::class,'editpostpatientcode']);
Route::get('/superadmin/delpatient/{id}',[SuperadminController::class,'delpatient']);
Route::get('/superadmin/reception',[SuperadminController::class,'reception']);
Route::post('/superadmin/fetchprec',[SuperadminController::class,'fetchprec']);
Route::post('/superadmin/fetchmed',[SuperadminController::class,'fetchmed']);
Route::post('/superadmin/addreceipt',[SuperadminController::class,'addreceipt']);
Route::get('/superadmin/patient_reciepts/{id}',[SuperadminController::class,'patient_reciepts']);
Route::get('/superadmin/patient_rec_medcs/{id}/{pid}',[SuperadminController::class,'patient_rec_medcs']);

});
// Supervisor
Route::get('/supervisor/login/{role}',[SupervisorCont::class,'login']);
Route::post('/supervisor/suplogin',[SupervisorCont::class,'suplogin']);


//stock-manager route with middleware
Route::group(['middleware'=>['stock']],function(){

//Route of stock Manager
Route::get('/stockmanager/dashboard',[StockmanagerController::class,'dashboard']);
Route::get('/stockmanager/add-stock',[StockmanagerController::class,'addstock']);
Route::post('/stockmanager/save-stock',[StockmanagerController::class,'saveStock']);
Route::get('/stockmanager/view-stock',[StockmanagerController::class,'viewstock']);
Route::get('/stockmanager/update-stock/{id}',[StockmanagerController::class,'updatestock']);
Route::post('/stockmanager/saveupdate-stock',[StockmanagerController::class,'saveUpdateStock']);
});


// Recptionist 

Route::get('recptionist/login/{role}',[SupervisorCont::class,'login']);
//Receptionist route with middleware
//Route::group(['middleware'=>['receptionist']],function(){
    
Route::get('/recptionist/dashboard',[recptionist::class,'dashboard']);
Route::get('/recptionist/todayrecpt',[recptionist::class,'todayrecpt']);
Route::get('/recptionist/reciepts/{rid}/{pid}',[recptionist::class,'todayreciepts']);
Route::get('/recptionist/bill/{receipt_id}',[recptionist::class,'bill']);

//});