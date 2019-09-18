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
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                   
<?php
 $data_news = \DB::table('newsfeed')->where('id','=','1')->first();
 $user = Sentinel::check();
?>
<marquee class="bg-blue" style="padding: 1%;">{{$data_news->news_feed}}</marquee> 
                    <!-- START WIDGETS -->
                    <div class="panel-footer text-center">
                         <a href="https://chat.whatsapp.com/LTtmeUo4GpW4GONLbYyNj2" class=".btn-warning">
                <i class="fa fa-whatsapp" style="color:Black;"></i>Click to Join Whatsapp Group
              </a>           
                            </div>  
                                 
                    <div class="row">
                      <div class="col-md-12">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-envelope"></span>
                                </div>                             
                                <div class="widget-data">
                                    
                                    <div class="widget-title">User Details</div>
                                     <script>
                                  // Set the date we're counting down to
                                  //var countDownDate = new Date("April 17, 2018 11:39:25").getTime();
                                  @if($user->recommitment_at!="0000-00-00 00:00:00")
                                   //alert('<?php echo(date("M d, Y H:i:s",  strtotime("+"."1 days", strtotime($user->recommitment_at)))); ?>');
                                  var countDownDate = new Date('<?php echo(date("M d, Y H:i:s",  strtotime("+"."48 hours", strtotime($user->recommitment_at)))); ?>').getTime();
                                  
                                @else
                                    @if($user->topup_date!="0000-00-00 00:00:00")
                                  //alert('<?php echo(date("M d, Y H:i:s",  strtotime("+"."12 hours", strtotime($user->topup_date)))); ?>');
                                  var countDownDate = new Date('<?php echo(date("M d, Y H:i:s",  strtotime("+"."48 hours", strtotime($user->topup_date)))); ?>').getTime();
                                    @else
                                         clearInterval(x);
                                        document.getElementById("demo").innerHTML = "Please Topup your ID";
                                    @endif
                                        
                                  @endif

                                  // Update the count down every 1 second
                                  var x = setInterval(function() {

                                      // Get todays date and time
                                      var now = new Date().getTime();
                                      
                                      // Find the distance between now an the count down date
                                      var distance = countDownDate - now;
                                      
                                      // Time calculations for days, hours, minutes and seconds
                                      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                      
                                      // Output the result in an element with id="demo"
                                      document.getElementById("demo").innerHTML =  days + "D " + hours + "H "
                                      + minutes + "M " + seconds + "S ";
                                      
                                      // If the count down is over, write some text 
                                      if (distance < 0) {
                                          clearInterval(x);
                                          document.getElementById("demo").innerHTML = "Time expired";
                                         // $('#div_link').remove();
                                      }
                                  }, 1000);
                                </script>
                                @if($user->is_active==1)

                                    <div class="col-md-6">Expiration Remain:</div>
                                     @if($user->epin!='') 
                                </div>
 <div class="widget-subtitle">Pending- {{$user->plan}}:</div>
  @endif
                      
@endif
 <div class="col-md-6">User Name:  {{ $user->user_name or 'NA'}}</div>
                       <div class="col-md-6">Transaction Pin: {{ $user->transaction_pin or 'NA'}}</div>
                      <div class="col-md-6">User Id: {{ $user->email or 'NA'}}</div>
                      <div class="col-md-6">Created Date: {{ $user->created_at or 'NA'}}</div>
                       <div class="col-md-6"><b>Referal Link:</b></div>
                        <input class="form-control input-sm" value="{{url('/')}}/admin/registration?sponcer_id={{$user->email}}" type="text" placeholder="Type a comment" autocomplete="off"></div>
                    </div>
                               
                            </div> 



                         <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>                             
                                   
                                    <?php 
$user = Sentinel::check();

    $data_plan = \DB::table('plans')->where('plan_amount','=',$user->plan)->first();
    ?>
                <?php $day = 0; $amount =0; $counter = 0; ?>

               @for($i =1; $i <= $data_plan->no_of_days; $i++)
                <?php 
                  

                  $counter++;
                  if($user->joining_date==null)
                  {
                    break;
                  }
                  $date = date('d-m-Y', strtotime($user->joining_date. ' + '.$counter.' day'));
               
                  /*if(date('l', strtotime($date))=='Saturday' || date('l', strtotime($date))=='Sunday')
                  {
                    $i--;
                    continue;
                    //$amount = $amount-400;
                  }*/
                  if(strtotime($date)<=strtotime(date('d-m-Y')))
                  {
                      $day = $day+1;
                  }
                  
                ?>
             @endfor
                
                <?php $amt =  $data_plan->plan_amount-($data_plan->daily*($data_plan->no_of_days-$day)) ?>
                @if($user->is_active==2)
                    <h3>{{$data_plan->plan_amount}}</h3>

                   
                    @if($day>=$data_plan->no_of_days)
                    <a href="{{url('/')}}/admin/recommit?email={{$user->email}}" class="btn bg-olive">Recommitment</a>
                    @else
                     <p>Commitment</p>s
                    @endif
                @elseif($user->is_active==0)
                     <h3>Block</h3>
                  @else
                      <h3>Inactive</h3>
                      <p>Commitment</p>
                @endif
              
                                
                                                            
                                    <a href="#" class="small-box-footer">{{$data_plan->no_of_days-$day}} Day Left <i class="fa fa-arrow-circle-right"></i></a>
                               
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                   <span class="fa fa-user"></span>
                                </div>    

<?php 
$user = Sentinel::check();

    $data_plan = \DB::table('plans')->where('plan_amount','=',$user->plan)->first();
    ?>
                <?php $day = $data_plan->no_of_days; $amount =0; $counter = 0; ?>
                @for ($i =1; $i <= $data_plan->no_of_days; $i++)
                <?php 
                  

                  $counter++;
                  if($user->joining_date==null)
                  {
                    break;
                  }
                  $date = date('d-m-Y', strtotime($user->joining_date. ' + '.$counter.' day'));
               
                  /*if(date('l', strtotime($date))=='Saturday' || date('l', strtotime($date))=='Sunday')
                  {
                    $i--;
                    continue;
                    //$amount = $amount-400;
                  }*/
                  if(strtotime($date)<=strtotime(date('d-m-Y')))
                  {
                      $day = $day-1;
                      $amount = $amount+$data_plan->daily;
                      
                  }
                  
                ?>
                @endfor
                
                @if($user->is_active==2)
              <h3>{{$amount}}</sup></h3>
            
              
               @elseif($user->is_active==0)
                     <h3>You are Block</h3>
              @else
              <h3>Inactive</h3>
                @endif
                 
                 <p>Growth Income</p>
                                      
                                   <a href="#" class="small-box-footer">Growth Income<i class="fa fa-arrow-circle-right"></i></a>
                               
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                     
                         <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                  <span class="fa fa-user"></span>
                                </div>                             
                                     
                
                <?php
                 $user = Sentinel::check();
                 $tran_data = \DB::table('transaction')->join('users', 'transaction.level_id', '=', 'users.email')->where(['reciver_id'=>$user->email])->where(['transaction.generator'=>'system'])->where('transaction.activity_reason','=','level')->select('transaction.level_id as sender_id','transaction.reciver_id','transaction.id as trans_id','users.id as user_sender_id','users.is_active','transaction.date','transaction.approval','transaction.generator','transaction.amount')->get();
                 
                 $amount=0;
                 ?>
                 
                 @foreach($tran_data as $key=>$value)
                 
                <?php 
                 if($value->is_active==2)
                 {
                 $amount+=$value->amount; 
                }
                 ?>
                 @endforeach
                 
                 
                  <?php $day = $data_plan->no_of_days; $amount_daily =0; $counter = 0; ?>
                @for ($i =1; $i <= $data_plan->no_of_days; $i++)
                <?php 
                  

                  $counter++;
                  if($user->joining_date==null)
                  {
                    break;
                  }
                  $date = date('d-m-Y', strtotime($user->joining_date. ' + '.$counter.' day'));
               
                  /*if(date('l', strtotime($date))=='Saturday' || date('l', strtotime($date))=='Sunday')
                  {
                    $i--;
                    continue;
                    //$amount = $amount-400;
                  }*/
                  if(strtotime($date)<=strtotime(date('d-m-Y')))
                  {
                      $day = $day-1;
                      $amount_daily = $amount_daily+$data_plan->daily;
                      
                  }
                  
                ?>
                @endfor
                
                
                 <?php
                 $user = Sentinel::check();
                 $tran_data_extra = \DB::table('transaction')->where(['reciver_id'=>$user->email])->where(['generator'=>'reciever'])->where('activity_reason','=','extra')->get();
                 
                 $amount_extra=0;
                 ?>
                 
                 @foreach($tran_data_extra as $key=>$value)
                 
                <?php $amount_extra+=$value->amount; ?>
                 
                 @endforeach
                
                
                  <?php
                 $user = Sentinel::check();
                 $tran_data = \DB::table('transaction')->where(['reciver_id'=>$user->email])->where(['generator'=>'reciever'])->where('activity_reason','=','withdrawl')->get();
                 
                 $amount_withdraw=0;
                 ?>
                 
                 @foreach($tran_data as $key=>$value)
                 
                <?php $amount_withdraw+=$value->amount; ?>
                 
                 @endforeach
                 
                 
            
                @if($user->is_active==2)
              <h3>{{$amount+$amount_daily-$amount_withdraw}}</sup></h3>
               @elseif($user->is_active==0)
                     <h3>Block</h3>
              @else
              <h3>Inactive</h3>
                @endif

              <p>Wallet Balance</p>            
                                    <a href="#" class="small-box-footer">Wallet Balance<i class="fa fa-arrow-circle-right"></i></a>
                               
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                  <span class="fa fa-user"></span>
                                </div>                             
                                        <?php
                 $tran_data = \DB::table('transaction')->where(['reciver_id'=>$user->email])->where(['generator'=>'reciever'])->where(['activity_reason'=>'withdrawl'])->get();
                 $amount=0;
                 ?>
                 
                 @foreach($tran_data as $key=>$value)
                 
                <?php $amount+=$value->amount; ?>
                 
                 @endforeach
               
                @if($user->is_active==2)
              <h3>{{$amount}}</h3>
              @elseif($user->is_active==0)
                     <h3>Block</h3>
              @else
              <h3>Inactive</h3>
                @endif

              <p>Total Withdrawl Amount</p>           
                                     <a href="#" class="small-box-footer">Total Withdrawl Amount<i class="fa fa-arrow-circle-right"></i></a>
                               
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                     <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                  <span class="fa fa-user"></span>
                                </div>                             
                                     <?php
                 $tran_data = \DB::table('transaction')->where(['reciver_id'=>$user->email])->where(['generator'=>'reciever'])->where(['activity_reason'=>'withdrawl'])->where(['approval'=>'payment_done'])->get();
                 $amount=0;
                 ?>
                 
                 @foreach($tran_data as $key=>$value)
                 
                <?php $amount+=$value->amount; ?>
                 
                 @endforeach
               
                @if($user->is_active==2)
              <h3>{{$amount}}</h3>
              @elseif($user->is_active==0)
                     <h3>Block</h3>
              @else
              <h3>Inactive</h3>
                @endif

              <p>Pending Withdrawl Amount</p>             
                                   <a href="" class="">Pending Withdrawl Amount</a>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                          <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                  <span class="fa fa-user"></span>
                                </div>                             
                                       <?php
                 $user = Sentinel::check();
                 $tran_data = \DB::table('transaction')->join('users', 'transaction.level_id', '=', 'users.email')->where(['reciver_id'=>$user->email])->where(['transaction.generator'=>'system'])->where('transaction.activity_reason','=','level')->select('transaction.level_id as sender_id','transaction.reciver_id','transaction.id as trans_id','users.id as user_sender_id','users.is_active','transaction.date','transaction.approval','transaction.generator','transaction.amount')->get();
                 
                 $amount=0;
                 ?>
                 
                 @foreach($tran_data as $key=>$value)
                 
                <?php 
                 if($value->is_active==2)
                 {
                 $amount+=$value->amount; 
                }
                 ?>
                 @endforeach
               
                @if($user->is_active==2)
              <h3>{{$amount}}</h3>
              @elseif($user->is_active==0)
                     <h3>Block</h3>
              @else
              <h3>Inactive</h3>
                @endif

              <p>Total Level Income</p>           
                                    <a href="#" class="small-box-footer">Level Income<i class="fa fa-arrow-circle-right"></i></a>
                               
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                          <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon">
                              
                                <div class="widget-item-left">
                                  <span class="fa fa-user"></span>
                                </div>                             
                                   <a href="{{url('/')}}/admin/withdrawl">              
                                 <div class="info-box-content">
              <span class="info-box-text">Click here to Withdraw Fund</span>
              <span class="info-box-number">{{$amount+$amount_daily-$amount_withdraw}}</span>

         
                <div class="progress-bar progress-bar-primary progress-bar-striped"  style="width: {{($amount+$amount_daily-$amount_withdraw)/10}}%"></div>
             
              <span class="progress-description">
                    Click Here to get wallet balance
                  </span>
            </div>   
                               
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
           
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            <!-- START BASIC TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                      <h3 class="panel-title">Provide Help (PH)</h3>
                                </div>
                                <div class="panel-body">
                                   
                                    <table class="table">
                                        <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Send Link To</th>
                  <th>Amount</th>
                  <th>status</th>
                   <th>action</th>
                 <!-- <th>Mobile No.</th>-->
                 <!-- <th>Status</th>
                  <th>Action</th>-->
                </tr>
                </thead>
                  
<tbody>
                @foreach($data_trans as $key=>$value)
            <?php $trans_user_data = \DB::table('users')->where(['email'=>$value->reciver_id])->first();
            if(empty($trans_user_data->user_name))
            {
              continue;
            }
            ?>
                
                       <td>Pending</td>
                      <td>{{$key+1}}</td>
                      <td>{{$trans_user_data->user_name or "NA"}}</td>
                      <td>{{$value->amount}}</td>
                      <td> <a class="btn btn-success" href="{{url('/')}}/admin/view?id={{$trans_user_data->id or 'NA'}}&amt={{$value->amount}}&tran_id={{$value->id}}">Give Help</a></td>
                    </tr>
                  @endforeach
                </tbody>
                                    </table>                                
                                </div>
                            </div>
                     
                            

                        </div>
                             <div class="col-md-6">

                            <!-- START BASIC TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                      <h3 class="panel-title">Get Help (GH)</h3>
                                </div>
                                <div class="panel-body">
                                   
                                    <table class="table">
                                         <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>User Id</th>
                  <th>amount</th>
                  <th>Action</th>
                  
                 <!-- <th>Mobile No.</th>-->
                 <!-- <th>Status</th>
                  <th>Action</th>-->
                </tr>
                </thead>
                   <?php 
                    $user = Sentinel::check();
                        $data = \DB::table('transaction')->where(['reciver_id'=>$user->email])->where('generator','<>','reciever')->where(['approval'=>'payment_done'])->get();
                    ?>
<tbody>
                  @foreach($data as $key=>$value)
                    <tr>
                      <?php $trans_user_data = \DB::table('users')->where(['email'=>$value->sender_id])->first();
            if(empty($trans_user_data->user_name))
            {
              continue;
            }
            ?>
                

                      <td>{{$key+1}}</td>
                      <td>{{$value->sender_id}}</td>
                      <td>{{$value->amount}}</td>
                      <td> <a class="btn btn-success" href="{{url('/')}}/admin/view1?id={{$trans_user_data->id or 'NA'}}">Get Help</a></td>
                    </tr>
                  @endforeach
                </tbody>
                                    </table>                                
                                </div>
                            </div>
                     
                            

                        </div>
          
                    <!-- START DASHBOARD CHART -->
          <div class="chart-holder" id="dashboard-area-1" style="height: 200px;"></div>
          <div class="block-full-width">
                                                                       
                    </div>                    
                    <!-- END DASHBOARD CHART -->
                    
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





