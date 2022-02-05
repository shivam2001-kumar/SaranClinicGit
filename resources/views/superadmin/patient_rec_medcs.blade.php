@extends('superadmin.includes.admin_master')
@section('main-container') 
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Hi, welcome to Admin Dashboard</h4>
              <p class="font-weight-normal mb-2 text-muted">@php  echo date('d-M-Y') @endphp</p>
            </div>
          </div>
          <!-- start table -->

          @if(Session::has('flash_message'))
      <div class="alert {!! session('status') !!}" role="alert"><em> {!! session('flash_message') !!}</em></div>
    @endif
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="card-title">Patient Name :  {{$tdata->reciept_id}}  || Name :{{$pdata->pname}}   || Mobile No. {{$pdata->contactno}}  ||  Date:  {{$tdata->date}}</h2>
                        </div>
                    </div>
                </div>
              <div class="card-body">
                
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead class="text-center">
                      <tr>
                        <th>
                          S/N
                        </th>
                        <th>
                       Medicine
                        </th>
                       
                        <th>
                         Dose
                        </th>
                        <th>
                          Time
                        </th>
                        

                        
                       
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <?php $i=1; ?>
                      @foreach($data as $sp)
                      <tr>
                        <td>
                            {{$i}}
                            
                        </td>
                        <td>
                          <span>{{$sp->medname}}</a></span>
                        </td>
                        
                        <td>
                            <span class=""></span> {{$sp->dose}}
                        </td>
                        <td >
                            <span></span>{{$sp->time}}
                          </td>
                         
                      </tr>
                      <?php $i++; ?>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>

</div>


@endsection