  @extends('admin.layout2.master')                

@section('main_content')  
         
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
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
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
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
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Basic</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>Daily Income</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Daily Income</h3>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false'});"><img src='img/icons/json.png' width="24"/> JSON</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"><img src='img/icons/json.png' width="24"/> JSON (ignoreColumn)</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'true'});"><img src='img/icons/json.png' width="24"/> JSON (with Escape)</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'xml',escape:'false'});"><img src='img/icons/xml.png' width="24"/> XML</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'sql'});"><img src='img/icons/sql.png' width="24"/> SQL</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='img/icons/csv.png' width="24"/> CSV</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='img/icons/txt.png' width="24"/> TXT</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='img/icons/word.png' width="24"/> Word</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>                                    
                                    
                                </div>
                                       
             <?php 
$user = Sentinel::check();

    $data_plan = \DB::table('plans')->where('plan_amount','=',$user->plan)->first();
    ?>           
                                    <table class="table datatable">
                                        <thead>
                <tr>
                  <th>Sr. No</th>
                  <th>Date</th>
                  <th>Daily Growth</th>
                  <th>Total Recived</th>
                 
                </tr>
                </thead>
                




<tbody>
  <?php
               $transaction  = \DB::table('transaction')->where(['reciver_id'=>$user->email])->where('activity_reason','=','daily')->orderBy('id', 'ASC')->get();
               $date1= date('Y-m-d'); 
               ?>

              
                @foreach($transaction as $key=>$value)
                  <tr>
                   

                    
                    <?php $date1= date('2018-11-12') ?>
                     
                    

                    

                    
                 
                    <td>{{$key+1}}</td>
                    <td>{{$value->date}}</td>
                    <td>{{$value->amount}}</td>
                    

                    <td>@if($value->approval=='completed')
                      <a href="javascript void(0)" class="btn label-success">Recieved</a>
                        @elseif($value->approval=='payment_done' && empty($value->sender) && strtotime($value->date) >= strtotime($date1))
                        <a href="javascript void(0)" class="btn label-danger">Time remaining</a>
                        @elseif($value->approval=='payment_done' && !empty($value->sender))
                        <a href="javascript void(0)" class="btn label-warning">sender allocated</a>
                        @elseif($value->approval=='payment_done' && empty($value->sender) && strtotime($value->date) <= strtotime($date1))
                        <a href="javascript void(0)" class="btn label-warning">Withdrawl requested</a>
                        @endif
                     
                    </td>
                   
                   
                  </tr>
                @endforeach       
                </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DATATABLE EXPORT -->                            
                             <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" style="background: #1390b2">
            <!-- Modal content-->
        
            <div class="modal-content" >
                <div class="modal-header" data-dismiss="modal">
                    <button type="button"  class="close" >&times;</button>
                <h4 class="modal-title">Transaction Pin</h4>
                </div>
                <form action="javascript:void(0)" method="post" id="payment-form">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 icon-calendar" style="padding-top: 20px;padding-left: 30px;padding-right: 30px">
                          
                            <label class="sr-only" for="arrival-Name">Pin</label>
                            <input type="text" class="form-control" id="pin" placeholder="Pin">
                            <span style="color: red;" id="error_name"></span><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btn_1" style="float: left;" onclick="pin_verify()" class="btn btn-success">Verify</button>
                         <button id="btn_2" style="float: left;display: none;"  class="btn btn-success"><i class="fa fa-spinner fa-spin"></i></button>
                        <span style="color: green" id="success_msg"></span>
                        <span style="color: red" id="error_msg"></span>
                        <button type="button" class="btn input_tranperent" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script type="text/javascript">

var p_id = {};
  function open_model(a)
  {
    $('#myModal').modal('toggle');
    p_id = a.getAttribute('value');
  }
  function pin_verify()
  {
$('#btn_1').hide();
    var flag       = 0;
    var pin        = $('#pin').val();
    var email      = $('#id').val();

    if(pin=='')
    {
    $('#error_name').text('Please Enter Pin');
    flag=1;
    }
    else
    {
    $('#error_name').text('');
    }

    if(flag==0)
    {
      $.ajax({
        url : "{{url('/admin/check_pin')}}",
        type: 'GET',
        data: {
          _method     : 'POST',
          pin        : pin,
          email        : email,
          _token      : '{{ csrf_token() }}'
        },
      success: function(response)
      {
        if(response=='true')
        {
           $('#btn_1').hide();
          $('#btn_2').show();
alert(p_id);
          $.ajax({
            url : "{{url('/admin/withdrawal_payment')}}",
            type: 'GET',
            data: {
              _method     : 'POST',
              id        : p_id,
                   
              _token      : '{{ csrf_token() }}'
            },
          success: function(response)
          {
             $('#btn_1').hide();
          $('#btn_2').show();
            if(response=='success')
            {
              $('#success_msg').val(response);
              setTimeout(
              function() 
              {
                 location.reload();
              }, 3000);
            }
            else
            {
               $('#error_msg').text("Payment Withdrawal Request Already Sent.");
setTimeout(
              function() 
              {
                 location.reload();
              }, 3000);

            }
          }
          });
        }
        else
        {
           $('#error_msg').text('Please enter valid pin');
            $('#btn_1').show();
          $('#btn_2').hide();
        }
      }
      });
    }
    else
    {
        $('#error_msg').text('Please enter valid pin');
         $('#btn_1').show();
          $('#btn_2').hide();
    }
  }
</script>
                          

                        </div>
                    </div>

                </div>         
                <!-- END PAGE CONTENT WRAPPER -->
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-times"></span> Remove <strong>Data</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to remove this row?</p>                    
                        <p>Press Yes if you sure.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <button class="btn btn-success btn-lg mb-control-yes">Yes</button>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->        
        
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
        
        <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/tableexport/tableExport.js"></script>
    <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/tableexport/jquery.base64.js"></script>
    <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/tableexport/html2canvas.js"></script>
    <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
    <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/tableexport/jspdf/jspdf.js"></script>
    <script type="text/javascript" src="{{url('/')}}/customer/js/plugins/tableexport/jspdf/libs/base64.js"></script>        
        <!-- END THIS PAGE PLUGINS-->  
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{url('/')}}/customer/js/settings.js"></script>
        
        <script type="text/javascript" src="{{url('/')}}/customer/js/plugins.js"></script>        
        <script type="text/javascript" src="{{url('/')}}/customer/js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                 
    </body>
</html>
  
@stop      
    <!-- END SCRIPTS -->         
    










