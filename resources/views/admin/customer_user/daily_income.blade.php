@extends('admin.layout.master')                

@section('main_content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daily Income
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Daily Income</li>
      </ol>
    </section>

     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              @include('admin.layout._operation_status')
            <div class="box-header">
              <h3 class="box-title">Daily Income</h3>
              <?php   $user = Sentinel::check(); ?>
              <input type="hidden" id="id" name="id" value="{{$user->email}}">
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
             
             <?php 
$user = Sentinel::check();

    $data_plan = \DB::table('plans')->where('plan_amount','=',$user->plan)->first();
    ?>
             
             <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Date</th>
                  <th>Daily Growth</th>
                  <th>Total Recived</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $amount =0; $counter = 0;?>
                @for ($i =1; $i <= $data_plan->no_of_days; $i++)
                <?php 
                  $user = Sentinel::check();
                  $counter++;
                  if($user->joining_date==null)
                  {
                    break;
                  }
                  $date = date('d-m-Y', strtotime($user->joining_date. ' + '.$counter.' day'));
               
                  if(date('l', strtotime($date))=='abcday' || date('l', strtotime($date))=='abcday')
                  {
                    $i--;
                    continue;
                    //$amount = $amount-400;
                  }
                ?>
                  <tr>
                    <td>{{$i}}</td>
                    <td>{{$date}}</td>
                    <td>{{$data_plan->daily}}</td>
                    <td>{{$amount = $amount+$data_plan->daily}}</td>
                    <td>
                      @if(strtotime($date)<strtotime(date('d-m-Y')))
                        <button class="btn label-success">Confirmed</button>
                      @elseif(strtotime($date)==strtotime(date('d-m-Y')))
                        <a onclick="open_model(this)" data-id="{{$user->email}}"  href="javascript:void(0);" class="btn label-info">Confirm</a>
                      @elseif(strtotime($date)>strtotime(date('d-m-Y')))
                        <a class="id_ btn label-danger">Peding</a>
                      @endif
                    </td>
                  </tr>
                @endfor       
                </tbody>
              </table>
             
             
             
             
             
              <table id="example1" class="table table-bordered table-striped">
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
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
   
  </div>
  <!-- /.content-wrapper -->
   <!-- Modal -->
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
@stop 