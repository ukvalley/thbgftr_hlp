<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>   

 
        <title>Forget Password</title>            
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
                    <div class="login-title"><strong>Farget Password</strong></div>
                         
        <form class="form-horizontal" method="post" action="{{url('/')}}/forget_password_process1" data-parsley-validate="">
        {{ csrf_field() }}
        @include('admin.layout._operation_status')
                    <div class="form-group">
                        <div class="col-md-12">
                             <input id="username" name="username" class="form-control" placeholder="User Name" type="text"  required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="mobile" name="mobile" class="form-control" placeholder="Mobile" type="text" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                       
                        <div class="col-md-6">
                           
                             <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
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






