<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <?php
 $data_news = \DB::table('site_setting')->where('id','=','1')->first();
?>

  <title>{{$data_news->site_name}} Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('/')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/')}}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('/')}}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/')}}/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('/')}}/plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
     .parsley-required{
      color: red;
      list-style: none;
      margin-left: -37px;
    }
    .parsley-equalto{
      color: red; 
      list-style: none;
          margin-left: -37px;
    }
  </style>
</head>
<body class="hold-transition login-page bg-blue" background="{{url('/')}}/images/back.jpeg">
<div class="login-box">
  <div class="login-logo">
        <img src="{{url('/')}}/images/growind.png" style="height: 75px;"><br>
    <a href="{{url('/')}}/admin"><b>Registration</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body bg-white">
    <p class="login-box-msg">Registration </p>

      <form class="login-form" method="post" action="{{url('/')}}/admin/register_process" data-parsley-validate="">
      {{ csrf_field() }}
      @include('admin.layout._operation_status')
      <div class="form-group has-feedback">
         <label>Your Name</label>
        <input id="username" name="username" class="form-control" placeholder="John michel" type="text" required="true">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
         <label>User ID</label>
         <input id="user_id" name="user_id" class="form-control" placeholder="Enter without space for eg abc12" type="text" required="true">
        <span class="glyphicon fa fa-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Sponcer Id</label>
        <input id="sponcer_id" name="sponcer_id" class="form-control" onchange="check()" placeholder="Sponcer Id" type="test" value="{{$_GET['sponcer_id'] or ''}}" required="true">
        <span id="success_msg" style="color: green"></span>
        <span id="error_msg" style="color:red"></span>
        <span class="glyphicon fa fa-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
      
                    <label>Select Package</label>
                    <?php
                    $plans = \DB::table('plans')->get();
                    ?>
                    
                    <select class="form-control" id="package" name="package">
                      @foreach($plans as $key=>$value)
                      <option>{{$value->plan_amount}}</option>
                      <!-- <option>4000</option>
                      <option>8000</option> -->
                       @endforeach
                    </select>
                
      </div>

     


      <div class="form-group has-feedback">
        <label>Password</label>
         <input id="password" name="password" class="form-control" placeholder="Enter Strong Password" type="password" required="true">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
         <label>Mobile</label>
         <input id="mobile" name="mobile" class="form-control" placeholder="98xxxxxxxx" type="text" required="true">
<span class="glyphicon glyphicon-mobile form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Email</label>
         <input id="email" name="email" class="form-control" placeholder="email@email.com" type="text" required="true">
      </div>
      <div class="form-group has-feedback">
        <label>IFSC Code</label>
         <input id="ifsc" name="ifsc" class="form-control" placeholder="IFSC code" type="text" required="true">
      </div>
      <div class="form-group has-feedback">
        <label>Bank Account Number</label>
         <input id="bank_account_no" name="bank_account_no" class="form-control" placeholder="Bank Account No." type="text" required="true">
      </div>
      <div class="form-group has-feedback">
         <label>Branch</label>
         <input id="branch" name="branch" class="form-control" placeholder="Branch" type="text" required="true">
      </div>
      <div class="form-group has-feedback">
         <label>Bank Name</label>
         <input id="banck_name" name="banck_name" class="form-control" placeholder="Bank Name" type="text" required="true">
      </div>
      <div class="form-group has-feedback">
         <label>Paytm Number</label>
         <input id="paytm" name="paytm" class="form-control" placeholder="Paytm" type="text" >
      </div>
      <div class="form-group has-feedback">
         <label>PhonePe Number</label>
         <input id="phonepe" name="phonepe" class="form-control" placeholder="Phonepe" type="text" >
      </div>
      <div class="form-group has-feedback">
         <label>Google Pay (Tez) Number</label>
         <input id="tez" name="tez" class="form-control" placeholder="Tez" type="text" >
      </div>
      <div class="form-group has-feedback">
        <label>Bhim Upi</label>
         <input id="bhim_upi" name="bhim_upi" class="form-control" placeholder="Bhim UPI" type="text" >
      </div>
      
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I have read and accepted <a href="http://lifetimehelp.org/privacy-policy/">Terms And Condition </a>
            </label>
          </div>
        </div>
      
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{url('/')}}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('/')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{url('/')}}/plugins/iCheck/icheck.min.js"></script>
<script src="{{url('/')}}/bower_components/parsley.js"></script>
<script type="text/javascript">
   function check()
    {
       var sponcer_id = $('#sponcer_id').val();
       $.ajax({
              url: "{{url('/check_sponcer1')}}",
              type: 'GET',
              data: {
                _method: 'GET',
                sponcer_id     : sponcer_id,
                _token:  '{{ csrf_token() }}'
              },
            success: function(response)
            {
              if(response.status == 'success')
              {
                $('#success_msg').text(response.name);
                $('#error_msg').text('');
              }
              else if(response.status == 'error')
              {
                $('#success_msg').text('');
                $('#error_msg').text('Sponcer id is invalid');
              }
              else
              {
                $('#success_msg').text('');
                $('#error_msg').text('Sponcer id is invalid');
              }
            }
            });
    }
</script>
<script>

$(document).ready(function(){
     setInterval(function(){  location.reload(); }, 380000);
});
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
