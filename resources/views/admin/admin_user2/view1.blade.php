
          @extends('admin.layout2.master')                

        @section('main_content')  
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    
<?php
$data_setting = \DB::table('site_setting')->where('id','=','1')->first();

?><!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">

                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
             
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
               
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                           <form class="col s12" method="post" action="{{url('/')}}/admin/process_change_pass" data-parsley-validate="">

              {{ csrf_field() }}
               @include('admin.layout._operation_status')
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Send Payment to {{$data->user_name}}</strong></h3>
                                    <ul class="panel-controls">
                                      
                                     
                                    </ul>
                                </div>
                            
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Username</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                       
                                                    <b> {{$data->user_name}}</b>
                                                    </div> 
                                                     
                                                    
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">User Id:</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        
                                                         <b>{{$data->email}}</b>
                                                      </div>            
                                                
                                                </div>
                                            </div><br>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Sponcer Id:</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        
                                                         <b> {{$data->spencer_id}}</b>
                                                      </div>            
                                                
                                                </div>
                                            </div><br>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Mobile No.:</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        
                                                         <b>{{$data->mobile}}</b>
                                                      </div>            
                                                
                                                </div>
                                            </div><br>
                                           <!--  <div class="form-group">                                        
                                                <label class="col-md-3 control-label">BRANCH :</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        
                                                         <b>{{$data->branch}}</b>
                                                      </div>            
                                                
                                                </div>
                                            </div><br>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">BANK:</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                       
                                                         <b> {{$data->banck_name}}</b>
                                                      </div>            
                                                
                                                </div>
                                            </div>
                                            
                                          </div>
                                   
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">IFSC:</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                       
                                                        <b>{{$data->ifsc}}</b>
                                                    </div>                                            
                                                 
                                                </div>
                                            </div><Br>
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">BANK ACCOUNT NO. :</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                       
                                                        <b> {{$data->bank_account_no}}</b>
                                                    </div>                                            
                                                 
                                                </div>
                                            </div><Br>
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">PAYTM:</label>
                                                <div class="col-md-9">       
                                                 @if($data->paytm!=null && strlen($data->paytm) >= 10)                                      
                                                    <div class="input-group">
                                                        
                                                        <b><a href="paytmmp://cash_wallet?featuretype=sendmoneymobile&recipient={{$data->paytm}}&amount=" ><button type="button" class="btn bg-navy btn-flat margin">{{$data->paytm}}<br> click here or pay on paytm</button></a></b>
                                                        @else
                                                        <b>Not Available</b>
                                                        @endif
                                                    </div>                                            
                                                 
                                                </div>
                                            </div><Br>
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">UPI Payment:</label>
                                                  @if($data->phonepe!=null && strlen($data->phonepe) >= 10)
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        
                                                        <b> <a href="upi://pay?pa={{$data->phonepe}}@ybl&pn={{$data->user_name}}&am="><button type="button" class="btn bg-purple btn-flat margin">{{$data->phonepe}}<br> click here or pay on UPI</button></td></a> </b>
                                                        @else
                                                        <b>Not Available</b>
                                                        @endif
                                                        <center><p style="color:red;"><b>Don't Use phonepe for below UPI Payment method</b><p></center>
                                                    </div>                                            
                                                 
                                                </div>
                                            </div><Br>
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">TEZ:</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        
                                                        <b> {{$data->tez}} </b>
                                                    </div>                                            
                                                 
                                                </div>
                                            </div><Br>
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">BHIM_UPI :</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        @if($data->bhim_upi!=null && strlen($data->bhim_upi) >= 10)
                                                        <b> <a href="upi://pay?pa={{$data->bhim_upi}}&pn={{$data->user_name}}&am="><button type="button" class="btn bg-orange btn-flat margin">{{$data->bhim_upi}}<br> click here or pay on UPI</button></td></a>  </b>
                                                        @else
                                                            <b>Not Available</b>
                                                        @endif
                                                    </div>                                            
                                                 
                                                </div>
                                            </div><Br>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Amount :.</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                       
                                                          <b></b>
                                                        
                   
                                                    </div>            
                                                  
                                                </div>
                                            </div>-->
                                               <div class="form-group">
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                       
                                                          <b> <a href="https://api.whatsapp.com/send?phone=91{{$data->mobile}}&text=Hello sir, I have sent you  payment through {{$data_setting->site_name}} at ({{$data->email}}) id. please accept my payment my user id is {{Sentinel::getUser()->email}} Regards:{{Sentinel::getUser()->user_name}} Member of {{$data_setting->site_name}}" class="btn btn-block btn-social btn-facebook bg-green">  <i class="fa fa-whatsapp"></i> Send confirmation message to Reciever on whatsapp
              </a>  </b>
                                                        
                   
                                                    </div>            
                                                  
                                                </div>
                                            </div><br><br>
                                               <div class="form-group"> 
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                       
                                                          <b> <input type="submit" class="btn cyan waves-effect waves-light right" id="submit" name="submit">  </b>
                                                        
                   
                                                    </div>            
                                                  
                                                </div>
                                            </div>
                                          </div>
                                    </div>

                                </div>
                                <div class="panel-footer">
                                   
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





