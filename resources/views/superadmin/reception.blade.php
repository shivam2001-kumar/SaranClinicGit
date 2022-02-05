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
                <h3 class="text-light">Receptioninst</h3>
              </div>
             
                <div class="card-body">
                  <form class="needs-validation" id="mobid">
                    @csrf()
                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group col-md-4 float-right">
                      <div class="input-group">
                      <input list="mobs"  id="mob"  name="mob" class="form-control" placeholder="Enter Mobile Number"aria-label="Recipient's username">
                        <datalist id="mobs" >
                        
                        @foreach($mobile as  $mob)
                          <option value=" {{$mob->contactno}}">

                         @endforeach
                        </datalist>
                      <div class="input-group-append">
                        <button class="btn btn-sm btn-primary" id="btnmob" type="submit">Enter</button>
                      </div>
                    </div>
                        @error('address')
                          <span class="text-danger">
                              {{$message}}
                          </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                   </form><br>
             
                  
                  <form action="{{url('superadmin/addreceipt')}}" class="needs-validation" id="" method="POST" enctype="multipart/form-data">
                    @csrf
                  
                    <div class="row ">
                    <input type="hidden" class="readonly" name="id" id="id" required/>
                    <div class="form-group col-md-5 ">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control readonly"  name="name" id="name" placeholder="Name " autocomplete="off"  required>
                        @error('name')
                          <span class="text-danger">
                              {{$message}}
                          </span>
                        @enderror
                      </div> 
                    <div class="form-group col-md-2">
                        <label for="age">Age:</label>
                        <input type="number" class="form-control" name="age" id="age" placeholder="Enter Age NO." required max="200">
                        @error('address')
                          <span class="text-danger">
                              {{$message}}
                          </span>
                        @enderror
                      </div>    
                      <div class="form-group col-md-2">
                        <label for="weight">weight:</label>
                        <input type="text" class="form-control" name="weight" id="weight" placeholder="Enter Weight" required maxlength="3">
                        @error('address')
                          <span class="text-danger">
                              {{$message}}
                          </span>
                        @enderror
                      </div>
                      
                      <div class="form-group col-md-3 ">
                        <label for="date">Date:</label>
                        <input type="date" class="form-control" name="date" id="date"  required>
                        @error('address')
                          <span class="text-danger">
                              {{$message}}
                          </span>
                        @enderror
                      </div>

                      <div class="form-group col-md-3">
                        <label for="search">Search Medicine</label>
                        <input list="medsearch" class="form-control" name="search" id="msearch" placeholder="Search Medicine"  onkeyup="medicine(this)" >
                        
                        <datalist id="medsearch" >
                           
                        
                        </datalist>
                        
                      </div> 
                      
                    
                         <div class="form-group col-md-3 mb-2">
                        <label for="dose">Dose</label>
                        <input type="text" class="form-control" name="dose" id="dose" placeholder="Enter Medicine Dose"   >
                        @error('address')
                          <span class="text-danger">
                              {{$message}}
                          </span>
                        @enderror
                        
                        </div> 
                        <div class="dropdown col-md-3">
                        <label for="timing">Timing</label>
                    <select class="form-control form-control-lg mt-2 h-50  selectpicker" id="timing" name="timing"  data-live-search="true">
                    <option>-- Select Timing</option>  
                    <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                        @error('address')
                          <span class="text-danger">
                              {{$message}}
                          </span>
                        @enderror
                        
                        </div> 
                        <div class="form-group col-md-2 mt-4  ">
                       
                        <button type="button" class="primary btn btn-primary"  id="createtr">ADD</button>
                      
                      
                         </div>
                         <table class="table table-bordered table-hover">
                           <thead class="bg-primary text-light">
                           <tr>
                             <th>Medicine</th>
                             <th>Dose</th>
                             <th>Timing</th>
                            </tr>

                            </thead>
                            <tbody id="tbody">

                            <tr>
                            </tr>
                            </tbody>
                        </table>
                         <div class="form-group col-12">
                        <label for="exampleFormControlTextarea1">Suggestion</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" name="sug"rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Submit</button> 
                    </div>
                     
                  </form>
              
                
                </div>
                
            </div>
        </div>
    </section>

          <!-- End form -->

          
</div>

<script>
    $(".readonly").keydown(function(e){
        e.preventDefault();
    });
</script>
<script>
  $('#btnmob').click(function(d){
 d.preventDefault();
 
  $.ajax(
    {
      url:"fetchprec", 
      method:"post",
      data:$('#mobid').serialize(),
      beforeSend:function(){
        $('#btnmob').text("fetching...");
        $('#btnmob').attr('disabled','disabled');
      },
      success:function(x){
        
       // alert(x.pemail);
       // alert(x.contactno);
        $('#name').val(x.pname);
        $('#id').val(x.id);
        $('#btnmob').text("Enter");
        $('#btnmob').removeAttr('disabled');
      }
    }
  );
});

 

  





  // onkey up
  function medicine(m)
  {
   // alert("hii");
var d=m.value;
//alert(d);
$.ajax(
{
  url:"fetchmed",
  method:"post",
  data:{
    _token: "{{csrf_token()}}",
    me:d
    },

  success:function(response){
    //console.log('success');
    //console.log(response);
   // console.log(response.medname);
          $("#medsearch").empty();
          var data=response;
          console.log(data);
          if (data != null) {
              jQuery.each(data, function(index, value){
                //console.log('hii');
                console.log(value[0].medcode);
      $("#medsearch").append('<option value=' + value[0].id+ '>'+value[0].medname+'</option>');
              });
          }

        }
});

  }

  // add medicine in table
  $(document).ready(function(){

$('#createtr').click(function(){

  var m=$('#msearch').val();

  //alert(m);
  var d=$('#dose').val();
  var t=$('#timing').val();
$('#tbody').append("<tr><td><input type='hidden' name='medicine[]' value='"+m+"'/>"+m+"</td><td><input type='hidden' name='dose[]' value='"+d+"'/>"+d+"</td><td><input type='hidden' name='dtime[]' value='"+t+"'/>"+t+"</td></tr>");

var m=$('#msearch').val("");
var d=$('#dose').val("");
var t=$('#timing').val("");

});


  });




  
</script>


@endsection 


