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

          @if(Session::has('msg'))
              <div class="alert alert-danger" role="alert"><em> {!! session('msg') !!}</em></div>
            @endif

          @if(Session::has('flash_message'))
      <div class="alert {!! session('status') !!}" role="alert"><em> {!! session('flash_message') !!}</em></div>
    @endif
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="card-title">List of all Patient</h2>
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
                        Patient Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                          Mobile
                        </th>
                        <th>
                          Age
                        </th>
                        <th>
                          Address
                        </th>
                        <th>
                            Action
                        </th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <?php $i=1; ?>
                      @foreach($data as $ps)
                      <tr>
                        <td>
                            {{$i}}
                            
                        </td>
                        <td>
                          <span><a  href="{{url('superadmin/patient_reciepts')}}/{{$ps->id}}">{{$ps->pname}}</a></span>
                        </td>
                        <td>
                            <span class="fas fa-envelope-open-text"></span> {{$ps->pemail}}
                        </td>
                        <td>
                            <span class="fas fa-phone"></span> {{$ps->contactno}}
                        </td>
                       
                        <td>
                            <span class="fas fa-child"></span> {{$ps->age}}
                        </td>
                        <td>
                            <span class="fas fa-location"></span> {{$ps->address}}
                        </td>
                        <td>
                        <a href="{{url('superadmin/editpatient')}}/{{$ps->id}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="{{url('superadmin/delpatient')}}/{{$ps->id}}" class="btn btn-danger"><i class="fas fa-trash-restore-alt"></i></a>
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