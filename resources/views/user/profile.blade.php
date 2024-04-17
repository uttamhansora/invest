@extends('user.master')
@section('content')
<style>
/* CSS styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
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
            <div class="col-12" style="display: flex;justify-content: space-around;">
                <!-- left column -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header-icon">
                                <svg role="img">
                                    <use xlink:href="/assets/img/icon-sprite.svg?cacheOff=1712237277946#icon-account">
                                    </use>
                                </svg>
                            </div>
                            Profile Settings
                        </div>
                        <div class="card-content" style="display: flex;justify-content: space-around;">
                            <div>
                                <div class="avatar-wrapper">
                                    <img src="/path/to/avatar.jpg" alt="Avatar">
                                    <div class="upload-button">
                                        <svg role="img">
                                            <use
                                                xlink:href="/assets/img/icon-sprite.svg?cacheOff=1712237277946#icon-camera">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <br />
                            </div>
                            <div>
                                <div class="info-list" >
                                    <div>
                                        <dt>ID</dt>
                                        <dd>{{auth()->user()->id}}</dd>
                                    </div>
                                    <div>
                                        <dt>Email</dt>
                                        <dd>{{auth()->user()->email}}</dd>
                                    </div>
                                </div>
                                <div style="display: flex;justify-content: flex-start;">
                                    <div>
                                        <dt>Password</dt>
                                        <dd>••••••••••••••</dd>
                                    </div>
                                    <div class="edit-link-icon">
                                        <i class='bx bx-edit-alt'></i>
                                        
                                    </div>
                                </div>
                                <div>
                                    <dl>
                                        <dt>Nickname</dt>
                                        <dd>UttamHansora74931</dd>
                                    </dl>
                                    <div class="edit-link-icon">
                                        <i class='bx bx-edit-alt'></i>
                                        Change Nickname
                                    </div>
                                </div>
                                <div>
                                    <dl>
                                        <dt>Verification Status</dt>
                                        <dd>{{auth()->user()->doc_verify == '0' ? 'Pending' : 'Submitted'}}</dd>
                                    </dl>
                                    @if(auth()->user()->doc_verify == '0')
                                    <div style=" display: flex;align-items: center;">
                                        <i style="font-size:25px;color:red" class='bx bx-time-five bx-tada'></i>
                                        &nbsp;
                                        Pending
                                    </div>
                                    @else
                                    <div class="" style=" display: flex;align-items: center;">
                                        <i style="font-size:25px" class='bx bx-check-square bx-tada success-icon'></i>
                                        &nbsp;
                                        Submitted
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7">
                <div class="card">
                        <div class="card-header">
                            <div class="card-header-icon">
                                <svg role="img">
                                    <use xlink:href="/assets/img/icon-sprite.svg?cacheOff=1712237277946#icon-account">
                                    </use>
                                </svg>
                            </div>
                            Account Settings
                        </div>
                        <div class="card-content" style="display: flex;justify-content: space-around;">
                            <div>
                                <div class="avatar-wrapper">
                                    <img src="/path/to/avatar.jpg" alt="Avatar">
                                    <div class="upload-button">
                                        <svg role="img">
                                            <use
                                                xlink:href="/assets/img/icon-sprite.svg?cacheOff=1712237277946#icon-camera">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                                <br />
                            </div>
                            <div>
                                <div class="info-list">
                                    <dl>
                                        <dt>ID</dt>
                                        <dd>{{auth()->user()->id}}</dd>
                                    </dl>
                                    <dl>
                                        <dt>Email</dt>
                                        <dd>{{auth()->user()->email}}</dd>
                                    </dl>
                                </div>
                                <div>
                                    <dl>
                                        <dt>Password</dt>
                                        <dd>••••••••••••••</dd>
                                    </dl>
                                    <div class="edit-link-icon">
                                        <i class='bx bx-edit-alt'></i>
                                        Change Password
                                    </div>
                                </div>
                                <div>
                                    <dl>
                                        <dt>Nickname</dt>
                                        <dd>UttamHansora74931</dd>
                                    </dl>
                                    <div class="edit-link-icon">
                                        <i class='bx bx-edit-alt'></i>
                                        Change Nickname
                                    </div>
                                </div>
                                <div>
                                    <dl>
                                        <dt>Verification Status</dt>
                                        <dd>{{auth()->user()->doc_verify == '0' ? 'Pending' : 'Submitted'}}</dd>
                                    </dl>
                                    @if(auth()->user()->doc_verify == '0')
                                    <div style=" display: flex;align-items: center;">
                                        <i style="font-size:25px;color:red" class='bx bx-time-five bx-tada'></i>
                                        &nbsp;
                                        Pending
                                    </div>
                                    @else
                                    <div class="" style=" display: flex;align-items: center;">
                                        <i style="font-size:25px" class='bx bx-check-square bx-tada success-icon'></i>
                                        &nbsp;
                                        Submitted
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content for the right column -->
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