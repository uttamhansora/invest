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
          <h1 class="m-0">Withdraw</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Withdraw</li>
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
              <h3 class="card-title">Withdraw</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('submit-withdraw')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Withdraw Amount</label>
                  <input type="text" name="withdrawamount" class="form-control" id=""
                    placeholder="Enter Withdraw Amount" required>
                    <small style="color:red">Make Sure Your QR Code / Wallet ID Is Update In Profile</small> 
                    <br/>
                    <a href="{{route('user-profile')}}">Add Qr Code Or Wallet ID</a>
                </div>
             </div>
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