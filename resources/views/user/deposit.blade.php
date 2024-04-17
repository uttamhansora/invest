@extends('user.master')
@section('content')
<link href="{{asset('userpanel/assets/libs/node-waves/waves.min.css')}}" rel="stylesheet">

<!-- Simplebar Css -->
<link href="{{asset('userpanel/assets/libs/simplebar/simplebar.min.css')}}" rel="stylesheet">

<!-- Color Picker Css -->
<link rel="stylesheet" href="{{asset('userpanel/assets/libs/flatpickr/flatpickr.min.css')}}">
<link rel="stylesheet" href="{{asset('userpanel/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">

<!-- Choices Css -->
<link rel="stylesheet" href="{{asset('userpanel/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">


<!-- Prism CSS -->
<link rel="stylesheet" href="{{asset('userpanel/assets/libs/prismjs/themes/prism-coy.min.css')}}">

<link rel="stylesheet" href="{{asset('userpanel/assets/libs/filepond/filepond.min.css')}}">
<link rel="stylesheet"
    href="{{asset('userpanel/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
<link rel="stylesheet"
    href="{{asset('userpanel/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
<link rel="stylesheet" href="{{asset('userpanel/assets/libs/dropzone/dropzone.css')}}">


<div class="main-content app-content">
    <div class="container-fluid">
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">

        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Deposit Form
                        </div>

                    </div>
                    <form action="{{route('deposit-amount')}}" method="POST" enctype="multipart/form-data">
              @csrf
                    <div class="card-body">
                        <label>Method: Deposit with USDT TRC20 Custom method</label>
                        <div class="form-group" style="text-align:center">
                            @if(isset($data->image) && $data->image !=null)
                            <img src="{{asset('images/'.$data->image)}}" style="height:50%;width:30%;" />
                            @else
                            <strong>QR Code Not Found</strong>
                            @endif
                        </div>
                        <br />
                        <p style="text-align:center" class="fw-bold">-OR-</p>
                        <label for="exampleInputEmail1" style="text-align:center !important">Wallet ID</label>
                        <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                            <!-- <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"> -->
                            <input type="text" name="walletid" value="{{$data->walletid ?? ''}}" class="form-control"
                                id="exampleInputEmail1" readonly>
                            <div class="input-group-append">
                                <div class="input-group-text" onclick="firetoasttext()" style="cursor:pointer"><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAS1JREFUSEvt1rEuBVEQxvHfbegpNAolGg8g0dCLRqdW0GklKLQa9KLTKDQqD6HTUVBIxAtIsEcuWZu9Mse6d0WcYk+x853/fJOzs9PR0uq0xJULnsUchjMTvsUpHt91OeBtbGUCy+H3mEHasxw/YLQBOEnXcZgLfmkITfKd4pEql+W4NfBbpoE1jiWM1MR+y3GA+REyVsAvkfby6js4wQ6wFgXPdwWTOfbwVNz4fWyUdHWfX63jCVxnAqvheyV4GJyaQ/QC9covOR/qvgyDm3amajf8B/fsXH+61JvYrfbqQThexNkgwXc4xyqe+w3+sheVJ5CfLvU/+FMFfkWpl3HS8O90VZwxFTmjOt4eYyUi7BGzgIuIvm6uTs6nI+JKzBFuorqcgT56ZiiuNfArbFVBH1+bM+wAAAAASUVORK5CYII=" />
                                </div>
                            </div>
                        </div>

                        <div class="mt-3" style="text-align:left">

                            <p>USDT-TRC20 deposit Procedure:</p>
                            <p>1- Complete the trasnfer to the USDT TRC20 deposit address.<br>2- Once you get the
                                confirmation, then enter the amount transferred along with the Proof
                                of
                                Transfer. -> Proceed<br>3- We will verify your transaction and automatically approve
                                your Deposit.</p>

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
                            <label for="exampleInputEmail1 " class="text-left">Enter Amount</label>
                            <input type="text" name="walletamount" class="form-control" id=""
                                placeholder="Enter Deposit Amount" required>
                        </div>
                        <div class="form-group text-left">
                            <label for="exampleInputEmail1 " class="text-left">Payment Success Proof</label>
                            <input type="file" class="multiple-filepond" name="filepond" multiple
                                data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                        </div>
                        <div class="form-group text-left">
                            <label for="exampleInputEmail1 " class="text-left">Transaction ID</label>
                            <input type="text" name="t_id" class="form-control">
                        </div>
                        <!-- <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Multiple Upload
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <input type="file" class="multiple-filepond dropzone" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                    </div>
                                </div>
                            </div> -->
                        <!-- <form class="row gy-2 gx-3 align-items-center mb-4">
                            <div class="col-auto">
                                <label class="visually-hidden" for="autoSizingInput">Name</label>
                                <input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe">
                            </div>
                            <div class="col-auto">
                                <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                                <div class="input-group">
                                    <div class="input-group-text">@</div>
                                    <input type="text" class="form-control" id="autoSizingInputGroup"
                                        placeholder="Username">
                                </div>
                            </div>
                            <div class="col-auto">
                                <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                                <select class="form-select" id="autoSizingSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                    <label class="form-check-label" for="autoSizingCheck">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form> -->

                    </div>
                    <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit Request</button>
              </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@push('js')
<script src="{{asset('userpanel/assets/libs/prismjs/prism.js')}}"></script>
<script src="{{asset('userpanel/assets/js/prism-custom.js')}}"></script>

<!-- Filepond JS -->
<script src="{{asset('userpanel/assets/libs/filepond/filepond.min.js')}}"></script>
<script src="{{asset('userpanel/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}">
</script>
<script
    src="{{asset('userpanel/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}">
</script>
<script
    src="{{asset('userpanel/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}">
</script>
<script src="{{asset('userpanel/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}">
</script>
<script src="{{asset('userpanel/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
<script
    src="{{asset('userpanel/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}">
</script>
<script
    src="{{asset('userpanel/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}">
</script>
<script src="{{asset('userpanel/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
<script src="{{asset('userpanel/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}">
</script>
<script src="{{asset('userpanel/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')}}">
</script>

<!-- Dropzone JS -->
<script src="{{asset('userpanel/assets/libs/dropzone/dropzone-min.js')}}"></script>

<!-- Fileupload JS -->
<script src="{{asset('userpanel/assets/js/fileupload.js')}}"></script>

<!-- Custom JS -->
@endpush