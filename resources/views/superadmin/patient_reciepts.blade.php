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
                            <h2 class="card-title">Patient Name :   {{$pdata->pname}}  || Mobile : {{$pdata->contactno}}</h2>
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
                         Receipt-id
                        </th>
                       
                        <th>
                          Date
                        </th>
                        <th>
                          Weight
                        </th>
                        <th>
                           Age
                        </th>

                        <th>
                            suggestion
                        </th>
                        <th>
                            Action
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
                          <span><a href="{{url('superadmin/patient_rec_medcs')}}/{{$sp->reciept_id}}/{{$pdata->id}}">{{$sp->reciept_id}}</a></span>
                        </td>
                        
                        <td>
                            <span class=""></span> {{$sp->date}}
                        </td>
                        <td >
                            <span></span>{{$sp->weight}}
                          </td>
                        <td>
                            <span class=""></span> {{$sp->age}}
                        </td>
                        
                        <td>
                        <span class=""></span> {{$sp->suggestion}}
                        </td>
                        <td>
                          @if($sp->status==true)
                            <a href="{{url('superadmin/updatesupervisor')}}/{{$sp->id}}/0" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            @else
                            <a href="{{url('superadmin/updatesupervisor')}}/{{$sp->id}}/1" class="btn btn-info"><i class="fas fa-eye-slash"></i></a>
                            @endif

                            <a href="{{url('superadmin/delsupervisor')}}/{{$sp->id}}" class="btn btn-danger"><i class="fas fa-trash-restore-alt"></i></a>
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