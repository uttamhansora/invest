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
          <!-- <h1 class="m-0">Withdraw</h1> -->
        </div><!-- /.col -->
        <div class="col-sm-6">
          <!-- <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Withdraw</li>
          </ol> -->
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
            <div class="card-header" style="background-color: #111C43 !important;color:#fff;">
              <h3 class="card-title" style="margin: 0;">Withdraw</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('submit-withdraw')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1" class="fs-6">Withdraw Amount <b>(Available Balance: &nbsp;${{auth()->user()->withdraw_amount}})</b></label>
                  <input type="text" name="withdrawamount" class="form-control mt-2 mb-1" id=""
                    placeholder="Enter Withdraw Amount" required>
                    <small style="color:red">Make Sure Your QR Code / Wallet ID Is Update In Profile</small> 
                    <br/>
                    <a href="{{route('user-profile')}}" class="mt-3 d-block">Add Qr Code Or Wallet ID</a>
                </div>
             </div>
              <div class="card-footer">
                <button type="submit" class="btn" style="background-color: #111C43 !important;color:#fff;">Submit</button>
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