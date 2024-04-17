@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Document List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Documents</li>
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
                            <h3 class="card-title">User Documents</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Document Type</th>
                                        <th>Document</th>
                                        <th>Upload Date</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($verifydoc as $user)
                                    <tr>
                                        <td>{{$user->userdata->first_name}}</td>
                                        <td>{{$user->document_type}}</td>
                                        <td><button class="btn btn-sm btn-success" onclick="openimage('{{asset('storage/'.$user->document_path)}}','{{$user->status}}')">View Doc</button></td>
                                        <td>{{$user->created_at->format('d-m-Y')}}</td>
                                        <td>{{$user->status}}</td>
                                      
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Document Type</th>
                                        <th>Document</th>
                                        <th>Upload Date</th>
                                        <th>Status</th>
                                        
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
        <div class="modal fade" id="verifydoc" tabindex="-1" role="dialog"
            aria-labelledby="verificationModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="verificationModalLabel">Verification Doc</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Document</p>
                        <img class="openimage">
                        <div class="pending">
                        <textarea name="rejectreason" class="form-control reason" placeholder="Reject Reason"></textarea>
                        <br/>
                        <button class="btn btn-sm btn-success" onclick="submitverify({{$user->id}},'approve')">Approve</button>
                        <button class="btn btn-sm btn-danger" onclick="submitverify({{$user->id}},'reject')">Reject</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

@endsection
@push('js')
<script>
function openimage(image,status){
    console.log(status)
    if(status !='approve' || status !='reject'){
        
        $(".pending").show()
    }else{
        $(".pending").css('display','none')
    }
    $('.openimage').attr('src', image);
    
    $('#verifydoc').modal('show');
}
function submitverify(id,status){
    
    if(status=='reject'){
        alert("Please Add Reject Reason");
        return false;
    }
    var reason =$(".reason").val();
    $.ajax({
                type: 'POST',
                url: '{{route("submitverify")}}', // Replace with your update status endpoint
                data: { id: id, status: status,reason:reason}, // Data to be sent
                success: function(response){
                    location.reload();
                },
                error: function(xhr, status, error){
                    // Handle error response
                    console.error('Error updating status:', error);
                }
            });
}
</script>
@endpush