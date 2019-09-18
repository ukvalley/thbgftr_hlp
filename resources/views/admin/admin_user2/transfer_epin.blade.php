
          @extends('admin.layout2.master')                

@section('main_content')  
            <div class="page-content">
                 <h1>
         Epin Transfer
        <small>Control panel</small>
      </h1>
                <!-- START X-NAVIGATION VERTICAL -->
  
               
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                           <form id="form_" class="col s12" method="post" action="{{url('/')}}/admin/epin_transfer"  onsubmit="return validateForm()"data-parsley-validate="">
                 @include('admin.layout._operation_status')
              {{ csrf_field() }}
                            <div class="panel panel-default">
                                <?php 
    $user = Sentinel::check();
    $epin_count = \DB::table('epin')->where('issue_to','=',$user->email)->where('used_by','=','')->count();
    
    $epin_count_200 = \DB::table('epin')->where('issue_to','=',$user->email)->where('used_by','=','')->where('amount','=','200')->count();
     $epin_count_300 = \DB::table('epin')->where('issue_to','=',$user->email)->where('used_by','=','')->where('amount','=','300')->count();
      $epin_count_500 = \DB::table('epin')->where('issue_to','=',$user->email)->where('used_by','=','')->where('amount','=','500')->count();
       $epin_count_1000 = \DB::table('epin')->where('issue_to','=',$user->email)->where('used_by','=','')->where('amount','=','1000')->count();
   
    ?>

               
                                
                            
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                                 <div class="form-group">
                                                <label class="col-md-3 control-label">Epin Amount</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                         <input  id="amount" name="amount" class="form-control" onchange="check_epin()" required="true">
                       <span id="epinmsg" style="color: green"></span>
        <span id="epinmsg1" style="color:red"></span>
                   

                                                    </div> 
                                                     
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Epin Available</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                         <input id="epin_available" disabled value="" name="epin_available" type="text" class="form-control" placeholder="" required="true">

                                                    </div> 
                                                     
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Transfer Quantity</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                        <input id="epin_Transfer" name="epin_Transfer" type="text" class="form-control" placeholder="Enter quantity less than 999 at a time" required="true">
                                                     </div>            
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>

    <?php 
    $user_data = \DB::table('users')->where('email','<>','admin')->get();
    $user = Sentinel::check();
    ?>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">User ID</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                       <input id="transfer_to" onchange="check()" name="transfer_to" type="text" class="form-control" placeholder="Enter username to transfer amount" required="true">


                                                    </div>                                            
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>
                    
                                          </div>
                                   
                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>
                                   
<input type="submit" class="btn btn-primary pull-righ" id="submit" name="submit">
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="{{url('/')}}/customer/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="{{url('/')}}/customer/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='{{url('/')}}/customer/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='{{url('/')}}/customer/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='{{url('/')}}/customer/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='{{url('/')}}/customer/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{url('/')}}/customer/js/settings.js"></script>
        
        <script type="text/javascript" src="{{url('/')}}/customer/js/plugins.js"></script>        
        <script type="text/javascript" src="{{url('/')}}/customer/js/actions.js"></script>
        
        <script type="text/javascript" src="{{url('/')}}/customer/js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>
@stop 





