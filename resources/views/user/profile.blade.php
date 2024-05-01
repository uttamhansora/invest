@extends('user.master')
@section('content')
<style>
/* CSS styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
dt{
    color: #000 !important;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.page-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

.card {
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 20px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-header {
    display: flex;
    align-items: center;
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
}

.card-header-icon {
    margin-right: 10px;
    fill: var(--base-accent);
    width: 24px;
    height: 24px;
}

.card-content {
    margin-bottom: 20px;
}

.avatar-wrapper {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 2px solid #ccc;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

.avatar-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.upload-button {
    position: absolute;
    bottom: 5px;
    right: 5px;
    background-color: #fff;
    padding: 5px;
    border-radius: 50%;
    cursor: pointer;
}

.info-list dl {
    margin-bottom: 10px;
}

.info-list dt {
    font-weight: bold;
    color: #555;
}

.edit-link-icon {
    display: flex;
    align-items: center;
    font-size: 16px;
    color: #007bff;
    cursor: pointer;
}

.edit-link-icon svg {
    width: 16px;
    height: 16px;
    margin-right: 5px;
    fill: currentColor;
}

.empty-message {
    color: #888;
    font-style: italic;
}
</style>
<style>
/* CSS styles */
.success-icon {
    color: #28a745;
    /* Success color (green) */
}

.vertical-line {
    border-left: 1px solid #ccc;
    /* Adjust border properties as needed */
    height: 100%;
    /* Adjust height as needed */
}
.veribadge::before{
    width:1px;
    height:100%;
    position:absolute;
    left:0;
    background-color:#ccc;
    top:0;
    content:'';
    margin-right:10px

}
.veribadge{
    position: relative;
    
}

</style>
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
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid p-4">
            <div class="row">
            <div class="col-12" >
                <!-- left column -->
                <div class="row w-100">
                <div class="col-md-6 pe-md-4 mt-md-1">
                    <div class="card h-100">
                        <div class="card-header" style="background-color: #111C43 !important;color:#fff;">
                            {{-- <div class="card-header-icon">
                                <svg role="img">
                                    <use xlink:href="/assets/img/icon-sprite.svg?cacheOff=1712237277946#icon-account">
                                    </use>
                                </svg>
                            </div> --}}
                            Profile Settings
                        </div>
                        <div class="card-content row mt-4">
                            <div class="col-md-4">
                                <div class="avatar-wrapper">
                                    <img src="{{asset('man.png')}}" alt="Avatar">
                                    <div class="upload-button">
                                        
                                    </div>
                                </div>
                                <br />
                            </div>
                            <div class="col-md-8">
                                <div class="info-list" >
                                    <div class="d-flex align-items-center">
                                        <dt>ID:&nbsp;</dt>
                                        <dd style="margin-bottom: 0">{{auth()->user()->id}}</dd>
                                    </div>
                                    <div class="d-flex align-items-center my-2">
                                        <dt>Email:&nbsp;</dt>
                                        <dd style="margin-bottom: 0">{{auth()->user()->email}}</dd>
                                    </div>
                                </div>
                                <div style="display: flex;justify-content: flex-start;">
                                    <div class="d-flex align-items-center mb-2">
                                        <dt>Password:&nbsp;</dt>
                                        <dd style="margin-bottom: 0">••••••••••••••</dd>
                                    </div>
                                    <div class="edit-link-icon">
                                        <i class='bx bx-edit-alt'></i>

                                    </div>
                                </div>
                                <div>
                                    <dl style="margin-bottom: 0" class="d-flex align-items-center">
                                        <dt>Nickname:&nbsp;</dt>
                                        <dd style="margin-bottom: 0">UttamHansora74931</dd>
                                    </dl>
                                    <div class="edit-link-icon">
                                        <i class='bx bx-edit-alt'></i>
                                        Change Nickname
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <dl>
                                        <dt>Verification Status:</dt>
                                        <dd style="margin-bottom: 0">
                                        @if(auth()->user()->doc_verify == '0' || auth()->user()->doc_verify == '1')
                                        Pending
                                        @else
                                        Done
                                        @endif
                                        </dd>
                                    </dl>
                                    @if(auth()->user()->doc_verify == '0' || auth()->user()->doc_verify == '1')
                                    <div style=" display: flex;align-items: center;">
                                        <i style="font-size:25px;color:red" class='bx bx-time-five bx-tada'></i>
                                        &nbsp;
                                        Pending
                                    </div>
                                    @else
                                    <div class="" style=" display: flex;align-items: center;">
                                        <i style="font-size:25px;color:green" class='bx bxs-badge-check'></i>
                                        &nbsp;
                                        Submitted
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-1"></div> --}}
                <div class="col-md-6 ps-md-4 mt-md-1 mt-4">
                <div class="card h-100">
                        <div class="card-header" style="background-color: #111C43 !important;color:#fff;">
                            
                            Verification And QR Code
                        </div>
                        <div class="card-content row mt-4">
                            <div class="col-md-4">
                                <div style="width:150px;height:150px;overflow:hidden">
                                    <img width="100%" src="{{asset('images/'.auth()->user()->qr_code_image ?? '')}}" alt="Avatar">
                                   <form action="{{route('updateqrandwalletid')}}" method="POST" enctype="multipart/form-data">
                                   @csrf
                                </div>
                                <label>Update Qr Code</label>
                                <br/>
                                <input type="file" name="qr_code_image" class="form-control">
                                <br />
                                <label>Your Wallet Id</label>
                                <br/>
                                <input type="text" class="form-control" name="wallet_id" value="{{auth()->user()->wallet_id ?? ''}}">
                                <br/>
                                <button type="submit" class="btn btn-dark">Save Settings</button>
                            </form>
                            </div>
                            
                            <div class="col-md-8 veribadge">
                                
                               
                                <div class="mt-3">
                                   
                                    <dt>Verification Status</dt>
                                    @if(auth()->user()->doc_verify == '0' || auth()->user()->doc_verify == '1')
                                    <div style=" display: flex;align-items: center;">
                                        <i style="font-size:25px;color:red" class='bx bx-time-five bx-tada'></i>
                                        &nbsp;
                                        Pending
                                    </div>
                                    @else
                                    <div class="" style=" display: flex;align-items: center;">
                                        <i style="font-size:25px;color:green" class='bx bxs-badge-check'></i>
                                        &nbsp;
                                        Submitted
                                    </div>
                                    @endif
                                </div>
                                <div class="mt-3">
                                   <?php
                                   $doc=\App\Models\Document::where('user_id',auth()->user()->id)->first();
                                   ?>
                                   <dt>Document Type</dt>
                                   <span>{{$doc->document_type}}</span>
                                   <br/>
                                   <dt>Uploaded Documents</dt>
                                   @if($doc)
                                   <span>{{$doc->status}}</span>
                                   <div style=" display: flex;align-items: center;">
                                       <img style="height:200px;width:200px" src="{{asset("app/public/".$doc->document_path ?? '')}}">
                                   </div>
                                   @endif
                               </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content for the right column -->
                </div>
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