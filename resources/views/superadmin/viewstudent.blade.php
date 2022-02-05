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
                            <h2 class="card-title">List of all student</h2>
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
                          Student's name
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
                            Qualification
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
                      <tr>
                        <td>
                            {{$i}}
                            
                        </td>
                        <td>
                          <span>Shiva</span>
                        </td>
                        <td>
                            <span class="fas fa-envelope-open-text"></span>
                        </td>
                        <td>
                            <span class="fas fa-phone"></span>
                        </td>
                        <td class="py-1">
                          </td>
                        <td>
                            <span class="fas fa-user-graduate"></span>
                        </td>
                        <td>
                          <a href="#" class="btn btn-success"><i class="fas fa-check-circle"></i></i></a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash-restore-alt"></i></a>
                        </td>
                      </tr>
                      <?php $i++; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>

</div>


@endsection