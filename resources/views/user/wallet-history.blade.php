@extends('user.master')
@section('content')
<div class="main-content app-content">
  
    <!-- Content Header (Page header) -->
    <div class="content-header">
      @if(auth()->user()->is_active == 2)
    <div class="callout callout-warning">
                  <h5>Warning !</h5>
                  <p>Your account is currently undergoing review.</p>
                </div>
                @endif
                @if(auth()->user()->is_banned == 2)
                <div class="callout callout-danger">
                  <h5>Alert !</h5>
                  <p>Your account is banned due to unusual activity please contact admin.</p>
                </div>
                @endif
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Wallet History</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Wallet History</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Wallet History</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Request Date</th>
                                        <th>Response Date</th>
                                        <th>Amount</th>
                                        <th>Intrest</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mergedRecords as $data)
                                    <tr>
                                        <td>{{$data->users->first_name}}</td>
                                        <td>{{$data->created_at->format('d-m-Y H:i:s')}}</td>
                                        <td>{{$data->date ?? '--'}}</td>
                                        <td>{{$data->amount}}</td>
                                        <td>{{$data->intrest ?? '--'}}</td>
                                        
                                        <td>
                                        @if($data->model_name=='Withdraw')
                                          
                                          <div class="text-danger font-weight-bold"><span>{{$data->model_name}}</span></div>
                                        @else
                                        <div class="text-success font-weight-bold"><span>{{$data->model_name}}</span></div>
                                        @endif
                                        </td>
                                        <td>
                                            @if($data->status=='pending')
                                            <div class="badge bg-warning">Pending</div>
                                            @elseif($data->status=='approved')
                                            <div class="badge bg-success">Approved</div>
                                            @else
                                            <div class="badge bg-danger">Rejected</div>
                                            @endif
                                            
                                        </td>
                                        
                                       
                                       
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Request Date</th>
                                        <th>Response Date</th>
                                        <th>Amount</th>
                                        <th>Intrest</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

<!-- /.container-fluid -->
</section>
    <!-- /.content -->
  </div>
@endsection