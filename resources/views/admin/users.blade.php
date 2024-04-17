@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users List</li>
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
                            <h3 class="card-title">All Users</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <!-- <th>Country</th> -->
                                        <th>Active</th>
                                        <th>Approve</th>
                                        <th>Role</th>
                                        <th>Qr Code</th>
                                        <th>Wallet Amount</th>
                                        <th>Verify Doc</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->first_name}}</td>
                                        <td>{{$user->last_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->mobile}}</td>
                                        <!-- <td>{{$user->countrys->name ?? ''}}</td> -->
                                        <td>
                                        @if($user->role !=1)
                                        <div class="form-group">
                                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input type="checkbox" class="custom-control-input" cus-id="{{$user->id}}" id="customSwitch1{{$user->id}}" @if($user->is_active==1)checked @else @endif>
                                            <label class="custom-control-label" for="customSwitch1{{$user->id}}"></label>
                                            </div>
                                        </div>
                                        @else
                                        --
                                        @endif
                                        </td>
                                        @if($user->role !=1)
                                        <td><div class="form-group">
                                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input type="checkbox" cus-id="{{$user->id}}" class="custom-control-input custom-control-inputs" id="customSwitch{{$user->id}}" @if($user->is_banned==1) checked @else @endif>
                                            <label class="custom-control-label" for="customSwitch{{$user->id}}"></label>
                                            </div>
                                        </div></td>
                                        @else
                                        <td>--</td>
                                        @endif
                                        <td><div class="{{$user->role ==1 ? 'badge bg-success' : 'badge bg-info'}}">{{$user->role ==1 ? 'Admin' : 'User'}}</div></td>
                                        <td>
                                            <select class="form-control assignqr">
                                                <option  value="">Select</option>
                                                @foreach($qrcode as $v)
                                                <option value="{{$v->id}}"  data-id="{{$user->id}}" @if(isset($user->qrcode) && $user->qrcode==$v->id) selected @else @endif>{{$v->qrname}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>{{$user->wallet_amount}}</td>
                                        <td>
                                            @if($user->doc==0) <div class="badge bg-danger">Not Verify </div> @else <div class="badge bg-success">Verified</div> @endif
                                            <br/>
                                            <button class="btn btn-sm btn-dark" type="button">View Doc</button>
                                        </td>
                                        <td><a href="{{route('deposit',$user->id)}}"><i class="fas fa-eye"></i></a></td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <!-- <th>Country</th> -->
                                        <th>Active</th>
                                        <th>Approve</th>
                                        <th>Role</th>
                                        <th>QR Code</th>
                                        <th>Wallet Amount</th>
                                        <th>Verify Doc</th>
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
<!-- /.content -->
</div>

@endsection
@push('js')
<script>
      
    $(document).ready(function(){
      
        // jQuery function to handle checkbox click event
        $('.custom-control-input').on('click', function(){
            var userId = $(this).attr('cus-id'); // Extract user ID from checkbox ID
            var isActive = $(this).is(':checked') ? 1 : 2;// Reverse isActive value to set isBanned
            // Send AJAX request to update status
            $.ajax({
                type: 'POST',
                url: '{{route("updatestatus")}}', // Replace with your update status endpoint
                data: { userId: userId, is_active: isActive}, // Data to be sent
                success: function(response){
                    Toast.fire({
                    icon: 'success',
                    title: 'Status Update Successfully'
                })
                },
                error: function(xhr, status, error){
                    // Handle error response
                    console.error('Error updating status:', error);
                }
            });
        });
        $('.custom-control-inputs').on('click', function(){
            var userId = $(this).attr('cus-id'); // Extract user ID from checkbox ID
            var isBanned = $(this).is(':checked') ? 1 : 2; // Reverse isActive value to set isBanned
            // Send AJAX request to update status
            $.ajax({
                type: 'POST',
                url: '{{route("updatestatus")}}', // Replace with your update status endpoint
                data: { userId: userId,is_banned: isBanned }, // Data to be sent
                success: function(response){
                    Toast.fire({
                    icon: 'success',
                    title: 'Status Update Successfully'
                })
                },
                error: function(xhr, status, error){
                    // Handle error response
                    console.error('Error updating status:', error);
                }
            });
        });
    });
</script>
<script>
    $(".assignqr").change(function(){
        var val=$(this).val();
        var userid=$(this).find('option:selected').attr('data-id');
        console.log(userid)
        $.ajax({
            url:"{{route('assignqr')}}",
            method:"POST",
            data:{val:val,id:userid},
            success:function(res){
                Toast.fire({
                    icon: 'success',
                    title: 'QR Code Assign Successfully'
                })
            }
        })
    })
    </script>
@endpush
