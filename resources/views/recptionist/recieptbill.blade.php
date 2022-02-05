@extends('recptionist.includes.recptionist_master')
@section('main-container') 
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Hi, welcome to Reception Dashboard</h4>
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
                        <div class="col-md-3 mt-3">
                            <h2 class="card-title">Name : {{$pdata[0]['pname']}}  || Bill No. : {{$data[0]['reciept_id']}}
                                
                            </h2>
                            
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="days"name="days" placeholder="How many days" value="0" onkeyup="calqty(this)"/>
                             
                        </div>
                        <div class="col-md-2 mt-2">
                        <button class="btn btn-sm btn-primary"  type="submit">Enter</button>
                        </div>
                        <div class="col-md-2 mt-3">
                                <h2 class="card-title">Date : {{$data[0]['date']}}</h2>
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
                          Med Name
                        </th>
                        <th>
                          Quantity
                        </th>
                        <th>
                          Per Amt.
                        </th>
                        <th >
                          Net. Amt.
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
                          <span>{{$ps->medname}}</span>
                        </td>
                        <td>
                         @php $qty=$ps->dose*$ps->time @endphp
                         <input type="text" name="qty" id="qty{{$i}}" value="{{$qty}}"/>
                         <input type="hidden" value="{{$qty}}" id="pqty{{$i}}"/>
                        </td>
                        <td>
                          <span>{{$ps->perqtamount}}</span>
                          <input type="hidden" id="peramt{{$i}}" value="{{$ps->perqtamount}}"/>
                        </td>
                        <td>
                         @php $ta=$ps->perqtamount*$qty @endphp
                         <input type="text" name="ta" id="ta{{$i}}" style="border:none;" value="{{$ta}}" readonly/>
                         
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
<script>

    $(document).ready(function(){
  
    });

    function calqty(p){
        if($('#days').val()<0)
        {
            $('#days').val(0);
        }
        for(var l=1;l<={{$i}};l++)
        {
      var d=$('#days').val();
      var d2=$('#pqty'+l).val();
      var d3=$('#peramt'+l).val();
      var tqty=d*d2;
      
      $('#qty'+l).val(tqty);

      var tamt=tqty*d3;
      $('#ta'+l).val(tamt);
    }
   }
   
</script>


@endsection

