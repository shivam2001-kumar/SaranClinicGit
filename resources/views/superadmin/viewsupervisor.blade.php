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
                            <h2 class="card-title">List of all Supervisor</h2>
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
                          Supervisor Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                          Mobile
                        </th>
                        <th>
                          Profile pic
                        </th>
                        <th>
                           Highest Qualification
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Action
                        </th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <?php $i=1; ?>
                      @foreach($supervisor as $sp)
                      <tr>
                        <td>
                            {{$i}}
                            
                        </td>
                        <td>
                          <span>{{$sp->name}}</span>
                        </td>
                        <td>
                            <span class="fas fa-envelope-open-text"></span> {{$sp->email}}
                        </td>
                        <td>
                            <span class="fas fa-phone"></span> {{$sp->contactno}}
                        </td>
                        <td class="py-1">
                            <img class="img-logo" src="{{asset('/staffimage')}}/{{$sp->profile}}" style="width:5rem;height:4rem;"/>
                          </td>
                        <td>
                            <span class="fas fa-user-graduate"></span> {{$sp->qualification}}
                        </td>
                        <td>
                          <a href="#" class="btn btn-success"><i class="fas fa-check-circle"></i></i></a>
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