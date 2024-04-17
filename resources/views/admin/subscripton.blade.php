@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sub Scription List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sub Scription List</li>
                    </ol>
                </div>
            </div>
            <a class="btn btn-info" href="{{route('addsubscription')}}">Add Sub Scription</a>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Sub Scription</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Details</th>
                                        <th>Duration</th>
                                        <th>Amount</th>
                                        <th>Created By</th>
                                        <th>Active</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($subscripton as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->details}}</td>
                                        <td>{{$user->duration}}</td>
                                        <td>{{$user->min_amount}}</td>
                                        <td>{{$user->createduser->first_name}}</td>
                                        <td>
                                        <div class="form-group">
                                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                                            <label class="custom-control-label" for="customSwitch3"></label>
                                            </div>
                                        </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Details</th>
                                        <th>Duration</th>
                                        <th>Amount</th>
                                        <th>Created By</th>
                                        <th>Active</th>
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