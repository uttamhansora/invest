<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('frontend/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
</head>
<style>
    .btn-primary{
        background-color: #845adf;
        border: none;
        width: 100%;
    }
    .btn-primary:hover{
        background-color: #845adf;
    }
    .select2-selection--single{
        height:37px !important;
    }
    select{
        border: none !important;
        border-bottom: 2px solid #ccc !important;
    }
    .box {
            width: 100%;
  display: inline-flex;
  flex-direction: column;
  position: relative;
  overflow: hidden;
  background-color: transparent;
}

/* Set the initial styling and transition for the label */
.box label {
  position: absolute;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  padding: 0 0 0 10px;
  width: 100%;
  height: 100%;
  user-select: none;
  transition: 0.5s;
  background-color: transparent;
  font-weight: 400 !important;
}

/* Styling for the input field */
.box input {
  width: 100%;
  padding: 20px 0 5px 10px;
  border: none;
  outline: none;
  border-bottom: 2px solid #ccc;
  transition: 0.5s;
  background-color: transparent;
}

/* Label transition when the input is focused or not empty */
.box input:focus + label,
.box input:not(:placeholder-shown) + label {
  transform: translateY(-30%);
  font-size: 0.6rem;
}

/* Change the border color when the input is not empty */
.box input:not(:placeholder-shown) {
  border-bottom: 3px solid #00ff0066;
}
.box input::placeholder{
    color: transparent;
}
.input-group-append{
    position: absolute;
    right: 0;
    bottom: 2px;
}
.main_box_sign_up
        {
            padding: 10px 20px;
            width: 100%;
            background-color: #845adf;
            color: #fff;
            font-size: 18px;
        }
        .main_box_sign_up:hover{
            color: #fff;
        }
    </style>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <!-- <a href="{{asset('frontend/index2.html"><b>Admin')}}</b>LTE</a> -->
  </div>

  <div class="card" style="overflow: hidden;border-radius: 5px">
    <div class="card-body register-card-body" style="padding: 0">
        <a href="{{route('user-login')}}" class="main_box_sign_up d-flex align-items-center justify-content-center mb-4" style="cursor: pointer">
            <span>Already with us?</span>&nbsp;
            <b>Sign in now!</b>
        </a>
      <div class="p-4">
        <p class="login-box-msg">Register a new membership</p>

      <form action="{{route('user-register-post')}}" method="POST">
        @csrf
        <div class="box mb-3">
          <input type="text" class="form-control" id="first_name" name="first_name" value="{{old('first_name')}}" placeholder="First name" required>
          <label for="first_name">First Name</label>
          {{-- <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div> --}}
        </div>
        <div class="box mb-3">
          <input type="text" class="form-control" id="last_name" name="last_name" value="{{old('last_name')}}" placeholder="Last name" required>
          <label for="last_name">Last Name</label>
          {{-- <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div> --}}
        </div>
        <div class="box mb-3">
          <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Email" required>
          <label for="email">Email</label>
          {{-- <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div> --}}
        </div>
        <div class="box mb-3">
          <input type="number" class="form-control" id="mobile" name="mobile" value="{{old('mobile')}}" placeholder="Phone Num.">
          <label for="mobile">Mobile</label>
          {{-- <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div> --}}
        </div>
        <div class="box mb-4">
        <select class="form-control select2" name="country" value="{{old('country')}}" id="countryDropdown" required>
            <option value="" selected>Select Country</option>
            @foreach($country as $v)
            <option value="{{$v->id}}">{{$v->name}}</option>
            @endforeach

        </select>
        </div>
        <div class="box mb-4">
        <select class="form-control select2state" name="state" value="{{old('state')}}" id="stateDropdown" required>
            <option value="">Select State</option>
        </select>
        </div>
        <div class="box mb-4">
        <select class="form-control select2city" name="city" value="{{old('city')}}" id="cityDropdown" required>
            <option value="" selected>Select City</option>
        </select>
        </div>
        <div class="box mb-3">
          <input type="password" id="password" name="password" value="{{old('password')}}" class="form-control" placeholder="Password">
          <label for="password">Password</label>
          {{-- <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div> --}}
        </div>
        <!-- <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div> -->
        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-lg btn-primary">Register </button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      {{-- <a href="{{route('user-login')}}" class="text-center">Already Have a account ? Login Here</a> --}}
      </div>
      <!-- <a href="{{route('user-login')}}" class="text-center">Forgot Password</a> -->
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('frontend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('frontend/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('frontend/plugins/select2/js/select2.full.min.js')}}"></script>
</body>
</html>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();
    $('.select2state').select2();
    $('.select2city').select2();
    $('#countryDropdown').on('select2:select', function (e) {
    var countryId = e.params.data.id;

    // Make AJAX call to fetch states for the selected country
    $.ajax({
      url: '{{route('getstate')}}',
      method: 'GET',
      data: { country_id: countryId },
      success: function(response) {
        // Clear existing options
        $('#stateDropdown').empty();
        $('#stateDropdown').append('<option value="">Select State</option>');
        // Populate state dropdown with fetched states
        $.each(response.states, function(index, state) {
          $('#stateDropdown').append('<option value="' + state.id + '">' + state.name + '</option>');
        });

        // Refresh Select2 dropdown
        $('#stateDropdown').select2('destroy').select2();
      },
      error: function(xhr, status, error) {
        console.error('Error fetching states:', error);
      }
    });
  });
  $('#stateDropdown').on('select2:select', function (e) {
    var stateId = e.params.data.id;

    // Make AJAX call to fetch cities for the selected state
    $.ajax({
      url: '{{route('getcity')}}',
      method: 'GET',
      data: { state_id: stateId },
      success: function(response) {
        // Clear existing options
        $('#cityDropdown').empty();

        // Populate city dropdown with fetched cities
        $.each(response.cities, function(index, city) {
          $('#cityDropdown').append('<option value="' + city.id + '">' + city.name + '</option>');
        });

        // Refresh Select2 dropdown
        $('#cityDropdown').select2('destroy').select2();
      },
      error: function(xhr, status, error) {
        console.error('Error fetching cities:', error);
      }
    });
  });
});
  </script>
  <script src="{{asset('frontend/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('frontend/plugins/toastr/toastr.min.js')}}"></script>
</body>
</html>
<script>
    var Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  customClass: {
    closeButton: 'swal2-close-button'
  }
});
    @if(Session::has('error'))
    Toast.fire({
        icon: 'error',
        title: '{{ Session::get("error") }}'
    })
    @endif
    </script>