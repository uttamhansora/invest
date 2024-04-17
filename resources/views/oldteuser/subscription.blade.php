@extends('user.master')
@section('content')
<style>
.card {
  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.08), 0 3px 6px 0 rgba(0, 0, 0, 0.03);
  border-right: 1px #dde0e2 solid;
  border-radius: 4px 4px 0 0;
  position: relative;
  background-color: white;
  color: #56575b;
  margin: 5px 0;

  .plan-name {
    padding: 13px 0;
    border-bottom: 1px #eff0f2 solid;
    text-align: center;
    text-transform: uppercase;
    font-size: 16px;
    color: #464c50;
    font-family: "Open sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
    letter-spacing: 1px;
  }

  .plan-description {
    padding: 15px;
    line-height: normal;
    min-height: 175px;
    font-size: 14px;
    line-height: 18px;
  }

  .plan-price sub {
    text-transform: none;
    font-size: 16px;
    bottom: 0;
  }

  .plan-price {
    color: #56575b;
    font-family: "Open sans";
    font-size: 34px;
    text-transform: uppercase;
    line-height: 50px;
  }

  sub {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
  }

  .plan-description.specs {
    min-height: 200px;
    line-height: 20px;
  }

  .plan-cta {
    position: absolute;
    bottom: 0px;
    left: 0;
    width: 100%;
    text-align: center;
    padding: 0 15px;
    min-height: 95px;
    &:hover a {
      opacity: 0.8;
      color: #fff;
      text-decoration: none;
    }
  }
  .button,
  .button-primary {
    background: #2a5bd7;
    border-radius: 8px;
    font-size: inherit;
    color: white;
    transition: background 100ms linear;
    text-decoration: none;
    line-height: normal;
    outline: none !important;
    padding: 0.6em 1em;
  }
}
/* For modern browsers */
.clamped-text {
  display: -webkit-box;
  -webkit-box-orient: vertical;
  overflow: hidden;
  /* Number of lines before truncating */
  -webkit-line-clamp: 3; 
}

/* For other browsers */
.clamped-text {
  display: -webkit-box;
  -webkit-box-orient: vertical;
  overflow: hidden;
  /* Number of lines before truncating */
  max-lines: 3; 
  /* fallback for browsers that do not support max-lines */
  -webkit-line-clamp: 3; 
}
  </style>
<div class="content-wrapper">
  
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
          <div class="col-sm-6">
            <h1 class="m-0">Sub Scription</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sub Scription</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section>
  <!-- <h1>Bootstrap 4 Pricing Table</h1> -->
  <div class="container">
    <div class="row">
      @foreach($data as $v)
      @php
      $selected=\App\Models\SubScription::where(['user_id'=>auth()->user()->id,'subscription_id'=>$v->id])->first();
      @endphp
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <div class="card-body" 
          @if(isset($selected) && ! \Carbon\Carbon::parse($selected->end_date)->isPast()) 
          style="background-color: aquamarine;" 
          @endif
>
            <div class="plan-name">
              {{$v->name}} @if(isset(auth()->user()->current_plan) && auth()->user()->current_plan !=null && auth()->user()->current_plan==$v->id) (CURRENT PLAN) @endif</div>
            <div class="plan-description">
              <div class="plan-price month">
                ${{$v->min_amount}}<sub> / Minimum Deposit</sub></div>
              <p class="clamped-text">{!!nl2br($v->details) !!}</p>
            </div>
            <div class="plan-description specs">

              1,000 Branded Links<br> 1+ User Seats<br> 1+ Custom Domains </div>
            <div class="plan-cta">
              @if(isset($selected) && ! \Carbon\Carbon::parse($selected->end_date)->isPast()) 
              <p><button class="btn btn-dark disabled" href="javascript:void(0)">Selected</button></p>
              @else
              <p><a class="button" href="javascript:void(0)" onclick="confirmplan({{$v->id}})" >Select</a></p>
              @endif
              
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-- ./container-->
</section>
    
    <!-- /.content -->
  </div>
  <script>
    function confirmplan(id){
      var confirms=confirm("Are you sure you want to select this plan ?");
      if(confirms){
        $.ajax({
          url:"{{route('selectplan')}}",
          method:"POST",
          data:{id:id},
          success:function(res){
            if(res==true){
              Toast.fire({
            icon: 'success',
            title: 'Plan Selected Successfully.'
        })
        location.reload();
            }else{
              Toast.fire({
            icon: 'error',
            title: 'Something Went Wrong.'
        })
        // location.reload();
            }
            
          }
        })
      }
    }
    </script>
@endsection