@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>QR-code Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">QR-code Add</li>
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
              <form action="{{route('submit-qr-code')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter QR Code Name</label>
                                    <input type="text" name="qrname" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter QR Code Name" required>
                                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">QR Code (Image)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>

                    </div>
                  </div>
                  <div class="form-group">
                                    <label for="exampleInputEmail1">Wallet ID</label>
                                    <input type="text" name="walletid" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Wallet ID" required>
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