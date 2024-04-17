
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="#">Invest</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('frontend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('frontend/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('frontend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{asset('frontend/dist/js/demo.js')}}"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('frontend/dist/js/pages/dashboard3.js')}}"></script>
<script src="{{asset('frontend/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('frontend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('frontend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('frontend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('frontend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('frontend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('frontend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('frontend/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('frontend/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('frontend/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('frontend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('frontend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('frontend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('frontend/plugins/select2/js/select2.full.min.js')}}"></script>
</body>
</html>
<script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    @if(Session::has('error'))
    Toast.fire({
        icon: 'error',
        title: '{{ Session::get("error") }}'
    })
    @endif
    @if(Session::has('success'))
    Toast.fire({
        icon: 'success',
        title: '{{ Session::get("success") }}'
    })
    @endif
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $("#example2").DataTable({}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    function firetoasttextcop(){
      var walletId = $(".walletid").val();
        
        // Create a temporary input element
        var tempInput = $("<input>");
        
        // Append the input element to the body
        $("body").append(tempInput);
        
        // Set the value of the input element to the text we want to copy
        tempInput.val(walletId).select();
        
        // Copy the selected text to the clipboard
        document.execCommand("copy");
        
        // Remove the temporary input element
        tempInput.remove();
      Toast.fire({
        icon: 'success',
        title: 'Wallet Id Copied Successfully.'
    })
    }
    </script>
    @stack('js')