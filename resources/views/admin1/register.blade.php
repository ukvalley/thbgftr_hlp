
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>  
     <?php
 $data_news = \DB::table('site_setting')->where('id','=','1')->first();
?>      
        <!-- META SECTION -->
        <title>{{$data_news->site_name}} Register</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="{{url('/')}}/customer/image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{url('/')}}/customer/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Registration </strong></div>
                   
 <form class="form-horizontal" method="post" action="{{url('/')}}/admin/register_process" data-parsley-validate="">
      {{ csrf_field() }}
      @include('admin.layout._operation_status')
                <div class="form-group">
                        <div class="col-md-12">
                            
                              <input id="e_pin" value="{{$_GET['epin'] or ''}}" name="e_pin" class="form-control" placeholder="Epin" type="text" >
                        </div>
              </div>

                    <div class="form-group">
                        <div class="col-md-12">
                             <input id="username" name="username" class="form-control" placeholder="John michel" type="text" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="user_id" name="user_id" class="form-control" placeholder="Enter without space for eg abc12" type="text" required="true">
                        </div>
                    </div>
                <div class="form-group">
                        <div class="col-md-12">
                           <input id="sponcer_id" name="sponcer_id" class="form-control" onchange="check()" placeholder="Sponcer Id" type="test" value="{{$_GET['sponcer_id'] or ''}}" required="true">
                        </div>
                    </div>
                        <div class="form-group">
                        <div class="col-md-12">
                              <label style="color:white">Select Package</label>
                    <?php
                    $plans = \DB::table('plans')->get();
                    ?>
                    
                    <select class="form-control" id="package" name="package">
                      @foreach($plans as $key=>$value)
                      <option style="color:white;">{{$value->plan_amount}}</option>
                      <!-- <option>4000</option>
                      <option>8000</option> -->
                       @endforeach
                    </select>
                        </div>
                    </div>





                    

                    <div class="form-group">
                        <div class="col-md-12">
                           <input id="password" name="password" class="form-control" placeholder="Enter Strong Password" type="password" required="true">
                        </div>
                    </div>
                <div class="form-group">
                        <div class="col-md-12">
                         <input id="mobile" name="mobile" class="form-control" placeholder="98xxxxxxxx" type="text" required="true">
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-md-12">
                           <input id="email" name="email" class="form-control" placeholder="email@email.com" type="text" required="true">
                        </div>
                    </div>
                 <div class="form-group">
                        <div class="col-md-12">
                          <input id="ifsc" name="ifsc" class="form-control" placeholder="IFSC code" type="text" required="true">
                        </div>
                    </div>
                <div class="form-group">
                        <div class="col-md-12">
                          <input id="bank_account_no" name="bank_account_no" class="form-control" placeholder="Bank Account No." type="text" required="true">
                        </div>
                    </div>
                <div class="form-group">
                        <div class="col-md-12">
                           <input id="branch" name="branch" class="form-control" placeholder="Branch" type="text" required="true">
                        </div>
                    </div>
                <div class="form-group">
                        <div class="col-md-12">
                           <input id="banck_name" name="banck_name" class="form-control" placeholder="Bank Name" type="text" required="true">
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-md-12">
                         <input id="paytm" name="paytm" class="form-control" placeholder="Paytm" type="text" >
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-md-12">
                          <input id="phonepe" name="phonepe" class="form-control" placeholder="Phonepe" type="text" >
                        </div>
                    </div>
<div class="form-group">
                        <div class="col-md-12">
                           <input id="tez" name="tez" class="form-control" placeholder="Tez" type="text" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                          <input id="bhim_upi" name="bhim_upi" class="form-control" placeholder="Bhim UPI" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                           <input id="banck_name" name="banck_name" class="form-control" placeholder="Bank Name" type="text" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                       
                        <div class="col-md-6">
                           
                            <button type="submit" class="btn btn-info btn-block">Register</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2014 AppName
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
            
        </div>
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






