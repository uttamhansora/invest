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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    <!-- /.content -->
  </div>
  @endsection