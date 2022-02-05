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
                  <form action="{{url('superadmin/addpatientcode')}}" class="needs-validation" id="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="teacher-name">Patient Name:</label>
                          <input type="text" class="form-control" name="pname" id="teacher-name" placeholder="Enter supervisor name" required/>
                          @error('teacher')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                          @enderror
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" name="pemail" id="email" placeholder="Enter email address" required>
                          @error('email')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="contact">Contact Number:</label>
                          <input type="text" class="form-control" name="contactno" id="contact" placeholder="Enter contact number" required>
                          @error('contact')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                          @enderror
                        </div>
                      </div>
                     
                      <div class="form-group col-md-6">
                        <label for="pin_code">Enter Age:</label>
                        <input type="number" class="form-control" name="age" id="age" placeholder="Enter Age" required>
                        @error('pin_code')
                          <span class="text-danger">
                              {{$message}}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group col-md-6">
                        <label for="pin_code">Enter DOB:</label>
                        <input type="date" class="form-control" name="dob" id="dob" placeholder="Enter DOB" required>
                        @error('pin_code')
                          <span class="text-danger">
                              {{$message}}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group col-md-6">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter address" required>
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