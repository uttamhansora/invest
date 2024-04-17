@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Notification List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Notification List</li>
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
                            <h3 class="card-title">Notification List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Notification</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach($notification as $v)
                                    <tr>
                                    <td>{{$v->notification}}</td>
                                    @if(isset($v->is_done) && $v->is_done !='2')
                                    <td><button class="btn btn-dark" onclick="approvedrejectwith({{$v->user_id}},{{$v->subscription_id}},{{$v->id}})">Withdraw</button></td>
                                    @else
                                    <td>--</td>
                                    @endif
                                </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th>Notification</th>
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
                            <label for="exampleInputEmail1">Send Payment</label>

                            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                <!-- <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"> -->
                                <input type="text" name="walletid" value="" class="form-control walletid"
                                    id="exampleInputEmail1" readonly>
                                <div class="input-group-append">
                                    <div class="input-group-text" onclick="firetoasttextcop()" style="cursor:pointer"><i
                                            class="fas fa-regular fa-copy"></i></div>
                                </div>
                            </div>
                            <label class="">Total Payable Amount</label>:&nbsp;<label class="amount"></label>
                            <form action="{{route('withdrawupdatenotification')}}" method="POST">
                                @csrf
                                <input type="hidden" class="user_id" name="user_id">
                                <input type="hidden" class="sub_id" name="subscription_id">
                                <input type="hidden" class="noid" name="noid">

                                <div class="form-group text-left">
                                    <label for="exampleInputEmail1">Enter Amount</label>
                                    <input type="text" name="amount" class="form-control" id=""
                                        placeholder="Enter Amount" required>
                                </div>
                                <div class="form-group text-left">
                                    <label for="exampleInputEmail1">Enter Intrest</label>
                                    <input type="number" name="intrest" class="form-control intrest" id=""
                                        placeholder="Enter Intrest Amount" required>
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
</div>
@endsection
@push('js')
<script>
     function approvedrejectwith(id, subid,noid) {
        
            $.ajax({
                url: "{{route('finqrcodenotify')}}",
                method: "POST",
                data: { id: id,subid:subid },
                success: function (res) {
                    $(".wid").val(res.id)
                    $(".qrimage").attr('src', res.image);
                    $(".walletid").val(res.wallet_id);
                    $(".user_id").val(res.user_id);
                    $(".sub_id").val(res.sub_id);
                    $(".noid").val(noid);
                    $(".amount").text(res.amount);
                    $("#modal-default").modal('show')
                }
            })
        }
      
    </script>
@endpush