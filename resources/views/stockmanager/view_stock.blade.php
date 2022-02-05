@extends('stockmanager.includes.stockmanager_master')
@section('main-container')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="card-title">List of All-Stock</h2>
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
                                            M-Code
                                        </th>
                                        <th>
                                            M-Name
                                        </th>
                                        <th>
                                           Quantity Type
                                        </th>
                                        <th>
                                            Per Unit
                                        </th>
                                        <th>
                                            Price
                                        </th>
                                        <th>
                                            Quantity
                                        </th>
                                        <th>
                                            Tot.-Quantity
                                        </th>
                                        <th>
                                            Tot Price
                                        </th>
                                        <th>
                                            Update
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php $i=1; ?>
                                    @foreach ($stock as $items)
                                    <tr>
                                        <td>
                                            {{$i}}

                                        </td>
                                        <td>
                                        {{$items->medcode}}
                                        </td>
                                        <td>
                                        {{$items->medname}}
                                        </td>
                                        <td>
                                        {{$items->medtype}}
                                        </td>
                                        <td>
                                        {{$items->medunit}}
                                        </td>
                                        <td>
                                        {{$items->price}}   
                                        </td>
                                        <td>
                                        {{$items->medquantity}}
                                        </td>
                                        <td>
                                        {{$items->totalquantity}}
                                        </td>
                                        <td>
                                        {{$items->totalprice}}
                                        </td>
                                        <td>
                                            <a href="{{url('/stockmanager/update-stock/'.$items->id)}}" class="btn btn-info"><i class="fas fa-refresh"></i></a>
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