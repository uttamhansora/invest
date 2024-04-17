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
          <h1 class="m-0">Deposit</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Deposit</li>
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
              <h3 class="card-title">Deposit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('deposit-amount')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body text-center">
                <div class="form-group">
                  @if(isset($data->image) && $data->image !=null)
                  <img src="{{asset('images/'.$data->image)}}" style="height:50%;width:50%;" />
                  @else
                  <strong>QR Code Not Found</strong>
                  @endif
                </div>
                <p>-OR-</p>
                <label for="exampleInputEmail1">Wallet ID</label>

                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                  <!-- <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"> -->
                  <input type="text" name="walletid" value="{{$data->walletid ?? ''}}" class="form-control"
                    id="exampleInputEmail1" readonly>
                  <div class="input-group-append">
                    <div class="input-group-text" onclick="firetoasttext()" style="cursor:pointer"><i
                        class="fas fa-regular fa-copy"></i></div>
                  </div>
                </div>
                <div class="form-group text-left">
                  <label for="exampleInputEmail1">Select Subscription</label>
                  <select class="form-control" name="sub_id" required>
                    <option value="">-- Select --</option>
                  @foreach($sub as $v)
                  <option value="{{$v->id}}">{{$v->name}}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group text-left">
                  <label for="exampleInputEmail1">Enter Amount</label>
                  <input type="text" name="walletamount" class="form-control" id="" placeholder="Enter Deposit Amount"
                    required>
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