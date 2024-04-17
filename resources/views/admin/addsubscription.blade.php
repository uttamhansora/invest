@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sub Scription Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sub Scription Add</li>
                    </ol>

                </div>
            </div>
            <!-- <a class="btn btn-info" href="{{route('add-qr-code')}}">Add QR-code</a> -->
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('submitsubscription')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sub Scription Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Name" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea class="form-control" name="details" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Duration</label>
                                    <select class="form-control select2" name="duration" required>
                                        <option value="1">1 Month</option>
                                        <option value="2">2 Month</option>
                                        <option value="3">3 Month</option>
                                        <option value="4">4 Month</option>
                                        <option value="5">5 Month</option>
                                        <option value="6">6 Month</option>
                                        <option value="7">7 Month</option>
                                        <option value="8">8 Month</option>
                                        <option value="9">9 Month</option>
                                        <option value="10">10 Month</option>
                                        <option value="11">11 Month</option>
                                        <option value="12">12 Month</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Minimum Amount</label>
                                    <input type="number" name="amount" class="form-control" id="exampleInputEmail1"
                                        placeholder="Minimum Amount" required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
@push('js')
<script>
    $(".select2").select2()
    </script>
    @endpush