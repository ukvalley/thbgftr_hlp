@extends('admin.layout.master')                

@section('main_content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content light-blue">

<?php
 $data_news = \DB::table('newsfeed')->where('id','=','1')->first();
 $user = Sentinel::check();
?>
<marquee class="bg-blue" style="padding: 1%;">{{$data_news->news_feed}}</marquee>

<div class="form-group bg-green">
<a href="https://chat.whatsapp.com/LTtmeUo4GpW4GONLbYyNj2" class="btn btn-block btn-social btn-facebook bg-green">
                <i class="fa fa-whatsapp"></i>Click to Join Whatsapp Group
              </a>

                    
                  </div>

  <div class="col-md-12">
              <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>

                  <h3 class="box-title">User Details</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                            title="Remove">
                      <i class="fa fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <div class="box-body" style="background-color: #9C27B0;color: white">
                  <div class="col-md-12" >
                    <div class="row">
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
                      <div class="col-md-12">Expiration Remain:<span class="task-card-date" style="color: white;font-size: 20px" id="demo">
                          @if($user->epin!='')
                      </span> <span class="task-card-date" style="color: white;font-size: 20px" id="demo1">Pending- {{$user->plan}}</span>
                            @endif
                      
@endif
                      <div class="col-md-6">User Name:  {{ $user->user_name or 'NA'}}</div>
                       <div class="col-md-6">Transaction Pin: {{ $user->transaction_pin or 'NA'}}</div>
                      <div class="col-md-6">User Id: {{ $user->email or 'NA'}}</div>
                      <div class="col-md-6">Created Date: {{ $user->created_at or 'NA'}}</div>
                    </div>
                    
                    
                   
                 
                </div>
                
                <div class="callout callout-info">
                Referal Link:<input class="form-control input-sm" value="{{url('/')}}/admin/registration?sponcer_id={{$user->email}}" type="text" placeholder="Type a comment" autocomplete="off">
              </div>
</div>
</div>

      <div class="row">
        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              
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
              
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">{{$data_plan->no_of_days-$day}} Day Left <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->



 
        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              
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
             
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">Growth Income<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      
    


        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
                
              
                
                
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
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Wallet Balance<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->



 <!-- ./col -->
        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
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
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Total Withdrawl Amount<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        
        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
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
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Pending Withdrawl Amount<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>



        <!-- ./col -->
        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
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
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Level Income<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


 <div class="col-lg-12 col-xs-12">

   <div class="col-lg-6 col-xs-12">
 <a href="{{url('/')}}/admin/withdrawl">
 <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

 

            <div class="info-box-content">
              <span class="info-box-text">Click here to Withdraw Fund</span>
              <span class="info-box-number">{{$amount+$amount_daily-$amount_withdraw}}</span>

              <div class="progress">
                <div class="progress-bar progress-bar-primary progress-bar-striped" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: {{($amount+$amount_daily-$amount_withdraw)/10}}%"></div>
              </div>
              <span class="progress-description">
                    Click Here to get wallet balance
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div> </a>
          </div>
</div>
     
     
      </div>
      <!-- /.row -->
      <!-- Main row -->
       @if($user->is_active==2 || $user->is_active==1)
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <div class="row">
           
           
            <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>

                  <h3 class="box-title">Provide Help (PH)</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                            title="Remove">
                      <i class="fa fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
            

               <div class="box-body" id="div_link" style="overflow-x:auto;">
         
              
              
              
              
              <table id="example1" class="table table-bordered table-striped">
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
       </div>
            
       </div>     
            
            
           
            <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>

                  <h3 class="box-title">Get Help (GH)</h3>
                  <!-- tools box -->
                  <div class="box-body" style="overflow-x:auto;">
              <table id="example1" class="table table-bordered table-striped">
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
          
           
       </div>
    

        <!--  <div class="col-md-12">
              <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
                   <h3 class="box-title">Rewards</h3>
                  </div>
                  
                  <li>1 Day Business - ₹25000  ( ₹ 2000 Reward) </li>
                  <li>2 Days Business - ₹50000 ( ₹5000 Reward)</li>
                  <li>4 Days Business - ₹100000 ( ₹10000 Reward )</li>
                  <li>10 Days Business - ₹500000 ( ₹50000 Reward)</li>
                  </div>
                  </div> -->
</div>
        </section>
        <!-- /.Left col -->
      </div>
      @endif
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
</script>

@stop 