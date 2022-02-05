@extends('admin.includes.admin_master')
@section('main-container') 
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Hi, welcome to Admin Dashboard</h4>
              <p class="font-weight-normal mb-2 text-muted">APRIL 1, 2019</p>
            </div>
          </div>
          <!-- start form -->

          <section>
        <div class="container">
            @if(Session::has('flash_message'))
              <div class="alert {!! session('status') !!}" role="alert"><em> {!! session('flash_message') !!}</em></div>
            @endif
            <div class="card">
              <div class="card-header bg-info">
                <h3 class="text-light">Add New Teacher</h3>
              </div>
                <div class="card-body">
                  <form action="" class="needs-validation" id="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="teacher-name">Teacher Name:</label>
                          <input type="text" class="form-control" name="teacher" id="teacher-name" placeholder="Enter teacher name">
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
                          <input type="email" class="form-control" name="email" id="email" placeholder="Enter email address">
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
                          <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter contact number">
                          @error('contact')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="row">
                          <div class="form-group col-md-8">
                            <label for="pic">Profile Image:</label>
                            <input type="file" class="form-control" name="pic" id="pic" accept="image/*" onchange="proFile(event)">
                            @error('pic')
                              <span class="text-danger">
                                  {{$message}}
                              </span>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <div class="img-fluide">
                              <img id="teacher_pic" class="img-fluid img-thumbnail"/>
                              <script>
                              var proFile = function(event) {
                                  var reader = new FileReader();
                                  reader.onload = function(){
                                  var output = document.getElementById('teacher_pic');
                                  output.src = reader.result;
                                  };
                                  reader.readAsDataURL(event.target.files[0]);
                              };
                              </script>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="country">Country:</label>
                          <select class="form-control" name="country" id="country">
                            <option selected disabled value="">--Select Country--</option>
                            <option value=""></option>  
                          </select>
                          @error('country')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="state">State:</label>
                          <select class="form-control" name="state" id="state">
                            <option selected disabled value="" id="msg">--Select State--</option>
                            
                          </select>
                          @error('state')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="city">City:</label>
                          <select class="form-control" name="city" id="city">
                            <option selected disabled value="" id="city_msg">--Select city--</option>
                            
                          </select>
                          @error('city')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="pin_code">Pin Code:</label>
                        <input type="number" class="form-control" name="pin_code" id="pin_code" placeholder="Enter pin code">
                        @error('pin_code')
                          <span class="text-danger">
                              {{$message}}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group col-md-6">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter address">
                        @error('address')
                          <span class="text-danger">
                              {{$message}}
                          </span>
                        @enderror
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="highest_qualification">Highest Qualification:</label>
                          <select class="form-control" name="highest_qualification" id="highest_qualification">
                            <option selected disabled value="">--Select Highest Qualification--</option>
                            <option value="Post Graduation">Post Graduation</option>
                            <option value="Graduation">Graduation</option>
                            <option value="Diploma">Diploma</option>
                            <option value="12th">12th</option>
                            <option value="10th">10th</option>
                          </select>
                          @error('city')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="cv">CV:</label>
                        <input type="file" class="form-control" name="cv" id="cv" accept="application/pdf">
                        @error('cv')
                          <span class="text-danger">
                              {{$message}}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group col-md-6">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" accept="pdf/*">
                        @error('password')
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

<script>
  $(document).ready(function(){
    // function for get state with Country Id
    $('#country').on('change',function(){
      var country= $('#country').val();
      $.ajax({
          url:'/admin/state/'+country,
          method:'get',
      beforeSend:function(){
          $('#msg').html("data fetching.....");
      },
      success:function(data){
          $('#state').html(data);
      }
      });
      
    });

    // function for get city with state Id
    $('#state').on('change',function(){
      var state= $('#state').val();
      $.ajax({
          url:'/admin/city/'+state,
          method:'get',
      beforeSend:function(){
          $('#city_msg').html("data fetching.....");
      },
      success:function(data){
          $('#city').html(data);
      }
      });
    });
  });
</script>
@endsection 