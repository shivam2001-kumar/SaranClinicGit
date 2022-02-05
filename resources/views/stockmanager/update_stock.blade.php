@extends('stockmanager.includes.stockmanager_master')
@section('main-container')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- start form -->

        <section>
            <div class="container">
                @if(Session::has('flash_message'))
                <div class="alert {!! session('status') !!}" role="alert"><em> {!! session('flash_message') !!}</em>
                </div>
                @endif
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-light">Update Medicine-Stock</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/stockmanager/saveupdate-stock')}}" class="needs-validation" id="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" value="{{$stock->id}}" name="id">
                                    <div class="form-group">
                                        <label for="medcode">Medicine Code:</label>
                                        <input type="text" class="form-control" name="medcode" id="medcode"
                                        value="{{$stock->medcode}}">
                                        @error('medcode')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="medname">Medicine Name:</label>
                                        <input type="text" class="form-control" name="medname" id="medname"
                                        value="{{$stock->medname}}">
                                        @error('medname')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="medtype">Quantity Type:</label>
                                        <select class="form-control" name="medtype" id="medtype">
                                            <option value="">--Select Type--</option>
                                            <option value="pcs" {{ $stock->medtype=='pcs'?'selected':''; }}>Pcs.</option>
                                            <option value="ml" {{ $stock->medtype=='ml'?'selected':''; }}>Ml.</option>
                                        </select>
                                        @error('medtype')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="medunit">Per Unit:</label>
                                        <input type="number" class="form-control" name="medunit" id="medunit"
                                        value="{{$stock->medunit}}">
                                        @error('medunit')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price">Price:</label>
                                        <input type="number" class="form-control" name="price" id="price"
                                        value="{{$stock->price}}">
                                        @error('price')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="medquantity">Enter Quantity:</label>
                                        <input type="number" class="form-control" name="medquantity" id="medquantity"
                                        value="{{$stock->medquantity}}">
                                        @error('medquantity')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="totalquantity">Total Quantity:</label>
                                        <input type="text" class="form-control" name="totalquantity" id="totalquantity" value="{{$stock->totalquantity}}">
                                        @error('totalquantity')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="totalprice">Total Price:</label>
                                        <input type="text" class="form-control" name="totalprice" id="totalprice" value="{{$stock->totalprice}}">
                                        @error('totalprice')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="submit" id="button" class="form-control btn btn-info" value="Update">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- End form -->
    </div>
    <div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
            $('input').keyup(function() {
                var type = $("#medtype option:selected").text();
                var medunit = $("#medunit").val();
                var medquantity = $("#medquantity").val();
                var tq = medunit * medquantity;
                $("#totalquantity").val(tq + " " + type);
                var price = $("#price").val();
                var tp = medquantity * price;
                $("#totalprice").val(tp);
            });
        });
        </script>


        @endsection