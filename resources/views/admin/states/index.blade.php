@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>States List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">States List</li>
                    </ol>
                </div>
            </div>
            <a class="btn btn-info" href="{{url('states/create')}}">Add State</a>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All States</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>State Name</th>
                                        <th>Country</th>
                                        <!-- <th>Active</th> -->
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($states as $state)
                                    <tr>
                                        <td>{{$state->name}}</td>
                                        <td>{{$state->country->name}}</td>
                                        <!-- <td>{{$state->active == 1 ? 'Active' : 'Inactive'}}</td> -->
                                        <td>
                                            <a href="{{ route('states.edit', $state->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('states.destroy', $state->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>State Name</th>
                                        <th>Country</th>
                                        <!-- <th>Active</th> -->
                                        <th>Actions</th>
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

</section>
<!-- /.content -->
</div>

@endsection
