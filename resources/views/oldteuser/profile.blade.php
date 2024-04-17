@extends('user.master')
@section('content')
<div class="content-wrapper">

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
          <h1 class="m-0">My Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">My Profile</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Profile</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('update-user-profile')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body ">
              <div class="form-group text-left">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="text" name="first_name" class="form-control" value="{{auth()->user()->first_name ?? ''}}" id="" placeholder="Enter Your First Name"
                    required>
                </div>
                <div class="form-group text-left">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="text" name="last_name" class="form-control" id="" value="{{auth()->user()->last_name ?? ''}}" placeholder="Enter Your Last Name"
                    required>
                </div>
                <div class="form-group text-left">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text"  class="form-control" id="" placeholder="Email" value="{{auth()->user()->email}}"
                    readonly>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">QR Code (Image)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="qr_code_image" id="exampleInputFile" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    @if(isset(auth()->user()->qr_code_image) && auth()->user()->qr_code_image !=null)
                    <img src="{{asset('images/'.auth()->user()->qr_code_image)}}" style="height:50px;width:50px" />
                    @endif
                    </div>
                  </div>
                  <div class="form-group">
                                    <label for="exampleInputEmail1">Wallet ID</label>
                                    <input type="text" name="wallet_id" value="{{auth()->user()->wallet_id ?? ''}}" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Wallet ID" required>
                                </div>
              </div>

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit Request</button>
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