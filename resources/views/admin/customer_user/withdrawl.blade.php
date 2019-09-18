@extends('admin.layout.master')                

@section('main_content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Support
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Support</li>
      </ol>
    </section>

   
                
              <?php 
$user = Sentinel::check();

    $data_plan = \DB::table('plans')->where('plan_amount','=',$user->plan)->first();
    ?>
                
                
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
                 $tran_data = \DB::table('transaction')->where(['reciver_id'=>$user->email])->where(['generator'=>'reciever'])->where('activity_reason','=','withdrawl')->get();
                 
                 $amount_withdraw=0;
                 ?>
                 
                 @foreach($tran_data as $key=>$value)
                 
                <?php $amount_withdraw+=$value->amount; ?>
                 
                 @endforeach
                 
                 <?php $wallet_balance= $amount+$amount_daily-$amount_withdraw ?>
            
               <section class="content">
      <div class="row">
        <div class="col-md-12">
           <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Withdrawl</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
               {{--  <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button> --}}
              </div>
            
            
          
            
              <!-- /. tools -->
              <form id="form" action="{{url('/')}}/admin/withdrawal_payment" class="col s12" method="get" onsubmit="return validateForm()" {{-- data-parsley-validate="" --}}>
                 @include('admin.layout._operation_status')
              {{ csrf_field() }}
              
               <div class="row" style="margin-top: 20px">
                <div class="col-md-6">
                  <div class="form-group">
             <span id="error_total_amount" style="float: center; color:red" </span>
               </div>
                </div>
              </div>
              
              <div class="row" style="margin-top: 20px">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Wallet Balance</label> <br>
                     <input disabled id="wallet_amt" name="wallet_amt" type="text" class="form-control" placeholder="Title" required="true" value="{{$wallet_balance}}">
                  </div>
                </div>
              </div>
              <div class="row" style="margin-top: 20px">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Withdrawl Amount</label> <br>
                    <select id="withdrawl_amt" name="withdrawl_amt" class="form-control"required="true">
                         <option value="10000">10000</option>
                         <option value="20000">20000</option>
                                </select>
                  </div>
                </div>
              </div>
              
             
              <?php
              
 date_default_timezone_set("Asia/Kolkata");
$current_time = date("h:i a");
$begin = "08:00 am";
$end   = "11:00 am";

$date1 = DateTime::createFromFormat('H:i a', $current_time);
$date2 = DateTime::createFromFormat('H:i a', $begin);
$date3 = DateTime::createFromFormat('H:i a', $end);


              
              
              
              ?>
              
            @if ($date1 >= $date2 && $date1 <= $date3) 
       <div class="row" style="margin-top: 20px">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="submit" class="btn cyan waves-effect waves-light right" id="submit" name="submit">
                  </div>
                </div>
              </div>
              @else
              <span style="color: red">Withdrawl Timing is 08:00 AM to 11:00 AM Please Visit Later</span>
              @endif
              </form>
            </div>
        </div>   
        </div>
       
       
       
       
       
       
        <!-- /.col -->
        
        
        
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
   
  </div>
  <!-- /.content-wrapper -->
  
  
  <script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>
  
  <script type="text/javascript">
    $(document).ready(function()
    {
      $("#form").submit(function()
      {
        var wallet_amt = $('#wallet_amt').val();
        var withdrawl_amt      = $('#withdrawl_amt').val();
       
        
        if(parseInt(withdrawl_amt)<'10000')
        {
          $('#error_total_amount').text('Withdrawl Amount Should be greater than min 10000 and max 20000 Rs');
          
          return false;
        }
        else if(parseInt(wallet_amt)<parseInt(withdrawl_amt))
        { 
          $('#error_total_amount').text('Amount should not grater than total amount');
          return false;
        }
        
        
        else if(parseInt(withdrawl_amt)>'20000')
        { 
          $('#error_total_amount').text('Daily Withdrawl Limit is Max 20000 and min 10000');
          return false;
        }
        else 
        {
          $('#error_total_amount').text('');
        }
      });
    });
  </script>

@stop 