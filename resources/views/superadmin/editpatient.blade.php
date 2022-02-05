

@extends('superadmin.includes.admin_master')
@section('main-container') 
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Hi, welcome to Admin Dashboard</h4>
              <p class="font-weight-normal mb-2 text-muted">@php  echo date('d-M-Y'); @endphp</p>
            </div>
          </div>

          <!-- start form -->

          <section>
        <div class="container">
            @if(Session::has('msg'))
              <div class="alert alert-danger" role="alert"><em> {!! session('msg') !!}</em></div>
            @endif
            @if(session()->has('msg'))
    <div class="alert alert-{{ session('msg') }}"> 
    {!! session('message.content') !!}
    </div>
@endif
            <div class="card">
              <div class="card-header bg-info">
                <h3 class="text-light">Add Patient</h3>
              </div>
                <div class="card-body">
                  <form action="{{url('superadmin/editpostpatientcode')}}" class="needs-validation" id="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}"/>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="teacher-name">Patient Name:</label>
                          <input type="text"  value="{{$data->pname}}" class="form-control" name="pname" id="teacher-name" placeholder="Enter supervisor name">
                          @error('teacher')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                          @enderror
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" value="{{$data->pemail}}" class="form-control" name="pemail" id="email" placeholder="Enter email address">
                          @error('email')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="contact">Contact Number:</label>
                          <input type="text" value="{{$data->contactno}}" class="form-control" name="contactno" id="contact" placeholder="Enter contact number">
                          @error('contact')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                          @enderror
                        </div>
                      </div>
                     
                      <div class="form-group col-md-6">
                        <label for="pin_code">Enter Age:</label>
                        <input type="number" value="{{$data->age}}" class="form-control" name="age" id="age" placeholder="Enter Age">
                        @error('pin_code')
                          <span class="text-danger">
                              {{$message}}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group col-md-12">
                        <label for="address">Address:</label>
                        <input type="text" value="{{$data->address}}" class="form-control" name="address" id="address" placeholder="Enter address">
                        @error('address')
                          <span class="text-danger">
                              {{$message}}
                          </span>
                        @enderror
                      </div>
                     
                      <div class="form-group col-md-12">
                        <input type="submit" class="form-control btn btn-info">
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </section>

          <!-- End form -->
</div>


@endsection 