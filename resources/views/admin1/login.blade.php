<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>   

   <?php
 $data_setting = \DB::table('site_setting')->where('id','=','1')->first();
?>     
        <!-- META SECTION -->
        <title>{{$data_setting->site_name}} Login</title>            
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
                <div class="login"><center><h1 style="color:white">The BigFuture</h1></center></div>
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    
                         <form class="form-horizontal" method="post" action="{{url('/')}}/admin/login_process" data-parsley-validate="">
        {{ csrf_field() }}
        @include('admin.layout._operation_status')
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="username" name="username" class="form-control" placeholder="User Name" type="text" value="{{$_COOKIE['username'] or ''}}" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                             <input id="password" name="password" class="form-control" placeholder="Password" type="password" value="{{$_COOKIE['password'] or ''}}" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                          
                            <a href="{{url('/')}}/admin/forget_password" class="btn btn-link btn-block">I forgot my password</a><br>
                            <a href="{{url('/')}}/admin/registration" class="class="btn btn-link btn-block">Register a new membership</a>
                        </div>
                        <div class="col-md-6">
                           
                             <button type="submit" class="btn btn-info btn-block">Log In</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                   
                  
                </div>
            </div>
            
        </div>
        
    </body>
</html>






