        <!-- Footer Start -->
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container">
                <span class="text-muted"> Copyright © <span id="year"></span> <a href="javascript:void(0);"
                        class="text-dark fw-semibold">Ynex</a>.
                    Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                        <span class="fw-semibold text-primary text-decoration-underline">Invest</span>
                    </a> All
                    rights
                    reserved
                </span>
            </div>
        </footer>
        <!-- Footer End -->

        </div>


        <!-- Scroll To Top -->
        <div class="scrollToTop">
            <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
        </div>
        <div id="responsive-overlay"></div>
        <!-- Scroll To Top -->
        <script src="{{asset('frontend/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Popper JS -->
        <script src="{{asset('userpanel/assets/libs/@popperjs/core/umd/popper.min.js')}}"></script>

        <!-- Bootstrap JS -->
        <script src="{{asset('userpanel/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Defaultmenu JS -->
        <script src="{{asset('userpanel/assets/js/defaultmenu.min.js')}}"></script>

        <!-- Node Waves JS-->
        <script src="{{asset('userpanel/assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- Sticky JS -->
        <script src="{{asset('userpanel/assets/js/sticky.js')}}"></script>

        <!-- Simplebar JS -->
        <script src="{{asset('userpanel/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('userpanel/assets/js/simplebar.js')}}"></script>

        <!-- Color Picker JS -->
        <script src="{{asset('userpanel/assets/libs/@simonwep/pickr/pickr.es5.min.js')}}"></script>



        <!-- JSVector Maps JS -->
        <script src="{{asset('userpanel/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>

        <!-- JSVector Maps MapsJS -->
        <script src="{{asset('userpanel/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

        <!-- Apex Charts JS -->
        <script src="{{asset('userpanel/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Chartjs Chart JS -->
        <script src="{{asset('userpanel/assets/libs/chart.js/chart.min.js')}}"></script>

        <!-- CRM-Dashboard -->
        <script src="{{asset('userpanel/assets/js/crm-dashboard.js')}}"></script>

        <!-- Custom JS -->
        <script src="{{asset('userpanel/assets/js/custom.js')}}"></script>


        <!-- Custom-Switcher JS -->
        <script src="{{asset('userpanel/assets/js/custom-switcher.min.js')}}"></script>
        <div class="modal fade" id="verificationModal" tabindex="-1" role="dialog"
            aria-labelledby="verificationModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="verificationModalLabel">Verification Required</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Your account is not yet verified. Please verify your account to continue.</p>
                        <form method="POST" action="{{ route('verification.submit') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="document_type">Select Document Type:</label>
                                <select class="form-control" id="document_type" name="document_type">
                                    <option value="national_id">National ID</option>
                                    <option value="driving_license">Driving License</option>
                                    <option value="passport">Passport</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="document">Upload Document:</label>
                                <input type="file" class="form-control" id="document" name="document">
                            </div>
                            <br/>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        </body>
      
        </html>
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
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

function firetoasttext() {
    var walletId = $("#exampleInputEmail1").val();

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
        @if (auth()->user()->doc_verify ==0)
        <!-- Insert code to open the popup automatically here -->
        <script>
$(document).ready(function() {
    $('#verificationModal').modal('show');
    // alert("Not Verify")
});
        </script>
        @endif
        @stack('js')