@extends('admin.master')
@section('content')
<div class="content-wrapper">
<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cities List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Cities List</li>
                    </ol>
                </div>
            </div>
            <a class="btn btn-info" href="{{ url('cities/create') }}">Add City</a>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Cities</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>City Name</th>
                                        <th>State</th>
                                        <!-- <th>Active</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cities as $city)
                                    <tr>
                                        <td>{{ $city->name }}</td>
                                        <td>{{ $city->state->name }}</td>
                                        <!-- <td>{{ $city->active ? 'Active' : 'Inactive' }}</td> -->
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
