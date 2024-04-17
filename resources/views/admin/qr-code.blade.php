@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>QR-code List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">QR-code List</li>
                    </ol>
                    
                </div>
            </div>
            <a class="btn btn-info" href="{{route('add-qr-code')}}">Add QR-code</a>
        </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All QR-codes</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Qr Code Name</th>
                                        <th>Wallet ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $val)
                                    <tr>
                                        <td><img src="{{asset('images/'.$val->image)}}" style="height:50px;width:50px" /></td>
                                       <td>{{$val->qrname}}</td>
                                       <td>{{$val->walletid}}</td>

                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Image</th>
                                        <th>Qr Code Name</th>
                                        <th>Wallet ID</th>
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