@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Deposit / Withdraw List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Deposit / Withdraw List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Deposit History</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Code Name</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($deposit as $data)
                                    <tr>
                                        <td>{{$data->users->first_name}}</td>
                                        <td>{{$data->qrcodes->qrname}}</td>
                                        <td>
                                            @if($data->status=='pending')
                                            <div class="badge bg-warning">Pending</div>
                                            @elseif($data->status=='approved')
                                            <div class="badge bg-success">Approved</div>
                                            @else
                                            <div class="badge bg-danger">Rejected</div>
                                            @endif

                                        </td>
                                        <td>{{$data->amount}}</td>
                                        @if($data->status=='pending')
                                        <td><button class="btn btn-success"
                                                onclick="approvedreject({{$data->id}},'approve')"><i
                                                    class="fas fa-check"></i></button>&nbsp;<button
                                                onclick="approvedreject({{$data->id}},'reject')"
                                                class="btn btn-danger"><i class="fas fa-times"></i></button></td>
                                        @else
                                        <td>--</td>
                                        @endif

                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Code Name</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Withdraw History</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                        <th>Intrest</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($withdraw as $data)
                                    <tr>
                                        <td>{{$data->users->first_name}}</td>
                                        <td>
                                            @if($data->status=='pending')
                                            <div class="badge bg-warning">Pending</div>
                                            @elseif($data->status=='approved')
                                            <div class="badge bg-success">Approved</div>
                                            @else
                                            <div class="badge bg-danger">Rejected</div>
                                            @endif

                                        </td>
                                        <td>{{$data->amount}}</td>
                                        <td>{{$data->intrest}}</td>
                                        @if($data->status=='pending')
                                        <td><button class="btn btn-success"
                                                onclick="approvedrejectwith({{$data->id}},'approve')"><i
                                                    class="fas fa-check"></i></button>&nbsp;<button
                                                onclick="approvedrejectwith({{$data->id}},'reject')"
                                                class="btn btn-danger"><i class="fas fa-times"></i></button></td>
                                        @else
                                        <td>--</td>
                                        @endif

                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                        <th>Intrest</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Withdraw Request</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="card-body text-center">
                            <div class="form-group">
                                <img class="qrimage" style="height:50%;width:50%;" />
                            </div>
                            <p>-OR-</p>
                            <label for="exampleInputEmail1">Wallet ID</label>

                            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                <!-- <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"> -->
                                <input type="text" name="walletid" value="" class="form-control walletid"
                                    id="exampleInputEmail1" readonly>
                                <div class="input-group-append">
                                    <div class="input-group-text" onclick="firetoasttextcop()" style="cursor:pointer"><i
                                            class="fas fa-regular fa-copy"></i></div>
                                </div>
                            </div>
                            <form action="{{route('withdrawupdate')}}" method="POST">
                                @csrf
                                <input type="hidden" class="wid" name="wid">
                                <div class="form-group text-left">
                                    <label for="exampleInputEmail1">Enter Amount</label>
                                    <input type="text" name="walletamount" class="form-control" id=""
                                        placeholder="Enter Deposit Amount" required>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.content -->
</div>

@endsection
@push('js')
<script>
    $(".assignqr").change(function () {
        var val = $(this).val();
        var userid = $(this).find('option:selected').attr('data-id');
        console.log(userid)
        $.ajax({
            url: "{{route('assignqr')}}",
            method: "POST",
            data: { val: val, id: userid },
            success: function (res) {
                Toast.fire({
                    icon: 'success',
                    title: 'QR Code Assign Successfully'
                })
            }
        })
    })
    function approvedreject(id, status) {
        $.ajax({
            url: "{{route('approvedreject')}}",
            method: "POST",
            data: { id: id, status: status },
            success: function (res) {
                Toast.fire({
                    icon: 'success',
                    title: 'Request Updated Successfully.'
                })
                location.reload()
            }
        })
    }
    function approvedrejectwith(id, status) {
        if (status == 'approve') {
            $.ajax({
                url: "{{route('finqrcode')}}",
                method: "POST",
                data: { id: id },
                success: function (res) {
                    $(".wid").val(res.id)
                    $(".qrimage").attr('src', res.image);
                    $(".walletid").val(res.wallet_id);
                    $("#modal-default").modal('show')
                }
            })

        } else {
            $.ajax({
                url: "{{route('approvedrejectwith')}}",
                method: "POST",
                data: { id: id, status: status },
                success: function (res) {
                    Toast.fire({
                        icon: 'success',
                        title: 'Request Updated Successfully.'
                    })
                    location.reload()
                }
            })
        }
    }
</script>
@endpush