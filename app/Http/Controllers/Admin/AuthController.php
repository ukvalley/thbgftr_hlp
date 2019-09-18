<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use URL;
use Mail;
use Session;
use Sentinel;
use Validator;
use App\Models\UserModel;
use App\Models\EmailTemplateModel;

class AuthController extends Controller
{
    public $arr_view_data;
    public $admin_panel_slug;

    public function __construct(UserModel $user_model,
                               EmailTemplateModel $email_template_model)
    {
      $this->UserModel          = $user_model;
      $this->EmailTemplateModel = $email_template_model;
      $this->arr_view_data      = [];
      $this->admin_panel_slug   = config('app.project.admin_panel_slug');

    }
    

    public function login()
    {
      $this->arr_view_data['admin_panel_slug'] = $this->admin_panel_slug;
      $this->arr_view_data['page_title'] = "Login";
      
    	return view('admin1.login',$this->arr_view_data);
    }

    public function login_process(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username'  => 'required|max:255',
            'password'  => 'required',
        ]);

        if ($validator->fails()) 
        {
            return redirect(config('app.project.admin_panel_slug').'/login')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }
       
        if(isset($_POST["remember_me"]))
        {
          if($_POST["remember_me"]=='on')
          {
            $hour = time() + 3600 * 24 * 30;
            setcookie('username',$request->input('username'), $hour);
            setcookie('password',$request->input('password'), $hour);
          }
        }

        $credentials = [
            'email'=> $request->input('username'),
            'password' => $request->input('password'),
        ];
        $check_authentication = Sentinel::authenticate($credentials);

        if($check_authentication)
        {

          $user = Sentinel::check();
          //print_r($user);die;
            return redirect('admin/dashboard');die;
         /* if($user->is_admin=='1')
          {
          }
          else
          {
            Sentinel::logout();
            Session::flash('error', 'Invalid Login Credentials.');
            return redirect('admin');
          }*/
        }
        else
        {
          Session::flash('error', 'Invalid Login Credentials.');
        } 
      Sentinel::logout();
      return redirect('admin');
    }

    public function dashboard()
    {
      $this->arr_view_data['admin_panel_slug'] = $this->admin_panel_slug;
      $this->arr_view_data['page_title']       = "dashboard";

       $user = Sentinel::check();
       die;
       if($user->is_admin==1)
       {
          return view('admin.dashboard',$this->arr_view_data);
       }
       else
       {
          return view('admin.customer_user.dashboard',$this->arr_view_data);
       }
      
    }

    public function registration()
    {
      $this->arr_view_data['admin_panel_slug'] = $this->admin_panel_slug;
      $this->arr_view_data['page_title']       = "Login";
      
      return view('admin1.register',$this->arr_view_data);
    }

    public function register_process(Request $request)
    
    
    {
      $validator = Validator::make($request->all(), [
            'username'       => 'required',
            'user_id'        => 'required',
            'sponcer_id'     => 'required',
            'mobile'         => 'required',
            'email'          => 'required',
            'password'       => 'required',
            'package'       =>  'required',
        ]);
      
      if ($validator->fails()) 
      {
          return redirect(config('app.project.admin_panel_slug').'/registration')
                      ->withErrors($validator)
                      ->withInput($request->all());
      }
      
      

      $count = $this->UserModel->where(['email'=>$request->input('sponcer_id')])->first();

   
      
      $plan = \DB::table('plans')->where(['plan_amount'=>$request->input('package')])->first();
     
      
      
     /* $plan_sponcer = \DB::table('plans')->where(['plan_amount'=>$count->plan])->first();
*/
      
      
      $count_self = $this->UserModel->where(['mobile' =>$request->input('mobile')])->count();
      
      
      
     

      
      
     /* if($count['epin']=='')
      {
   
        Session::flash('error', "Sponcer id not yet activated! Please wait for some time.");
        return redirect()->back();
      }*/

       
       
     
     
     
     
   
      $count = $this->UserModel->where(['email'=>$request->input('sponcer_id')])->count();

      
      
      $plan = \DB::table('plans')->where(['plan_amount'=>$request->input('package')]);
      
      
      
      if($count==0)
      {
        Session::flash('error', "No parent user exist.");
        return redirect()->back();
      }
      
      
      
      $count1 = $this->UserModel->where(['email'=>$request->input('user_id')])->count();
      
      
      
      if($count1)
      {
        Session::flash('error', "User already exist.");
        return redirect()->back();
      }

      
      
      $arr_data               = [];
      $arr_data['user_name']  = $request->input('username');
      $arr_data['mobile']     = $request->input('mobile');
      $arr_data['email']      = $request->input('user_id');
      $arr_data['password']   = $request->input('password');
      $arr_data['plan']   =   $request->input('package');
      $arr_data['is_active']  = 1;
      
      
     // print_r($arr_data);exit;
      $plan = \DB::table('plans')->where(['plan_amount'=>$request->input('package')])->first();
      //ulpine links
      
      
      
      for ($i=0; $i < $plan->upline ; $i++) 
      { 
        if($i==0)
        {
          $parent_under = $request->input('sponcer_id');
        }
        else
        {
          $data  = $this->UserModel->where(['email'=>$parent_under])->first();
          $parent_under = $data['spencer_id'];
        }

        $data  = $this->UserModel->where(['email'=>$parent_under])->first();
        if(!empty($parent_under))
        {
            if($i==0)
            {
          $arr_transaction                    = [];
          $arr_transaction['reciver_id']      = $parent_under;
          $arr_transaction['level_id']        = $request->input('user_id');
          $arr_transaction['sender_id']       = '';
          $arr_transaction['amount']          = $plan->plan_amount*(10/100);
          $arr_transaction['activity_reason'] = 'level';
          $arr_transaction['date']            = date('Y-m-d');
          $arr_transaction['approval']        = 'pending';
          $arr_transaction['generator']        = 'system';

          \DB::table('transaction')->insert($arr_transaction);
            }
            if($i==1)
          {    
        
          $arr_transaction                    = [];
           $arr_transaction['reciver_id']      = $parent_under;
          $arr_transaction['level_id']        = $request->input('user_id');
          $arr_transaction['sender_id']       = '';
          $arr_transaction['amount']          = $plan->plan_amount*(5/100);
          $arr_transaction['activity_reason'] = 'level';
          $arr_transaction['date']            = date('Y-m-d');
          $arr_transaction['approval']        = 'pending';
          $arr_transaction['generator']        = 'system';

          \DB::table('transaction')->insert($arr_transaction);
            }

            if($i==2)
            {
                 $arr_transaction                    = [];
           $arr_transaction['reciver_id']      = $parent_under;
          $arr_transaction['level_id']        = $request->input('user_id');
          $arr_transaction['sender_id']       = '';
          $arr_transaction['amount']          = $plan->plan_amount*(4/100);
          $arr_transaction['activity_reason'] = 'level';
          $arr_transaction['date']            = date('Y-m-d');
          $arr_transaction['approval']        = 'pending';
          $arr_transaction['generator']        = 'system';

          \DB::table('transaction')->insert($arr_transaction);
            }

            if($i==3)
            {
                 $arr_transaction                    = [];
           $arr_transaction['reciver_id']      = $parent_under;
          $arr_transaction['level_id']        = $request->input('user_id');
          $arr_transaction['sender_id']       = '';
          $arr_transaction['amount']          = $plan->plan_amount*(3/100);
          $arr_transaction['activity_reason'] = 'level';
          $arr_transaction['date']            = date('Y-m-d');
          $arr_transaction['approval']        = 'pending';
          $arr_transaction['generator']        = 'system';

          \DB::table('transaction')->insert($arr_transaction);
            }


            if($i==4)
            {
                 $arr_transaction                    = [];
          $arr_transaction['reciver_id']      = $parent_under;
          $arr_transaction['level_id']        = $request->input('user_id');
          $arr_transaction['sender_id']       = '';
          $arr_transaction['amount']          = $plan->plan_amount*(2/100);
          $arr_transaction['activity_reason'] = 'level';
          $arr_transaction['date']            = date('Y-m-d');
          $arr_transaction['approval']        = 'pending';
          $arr_transaction['generator']        = 'system';

          \DB::table('transaction')->insert($arr_transaction);
            }

            if($i==5)
            {
                 $arr_transaction                    = [];
          $arr_transaction['reciver_id']      = $parent_under;
          $arr_transaction['level_id']        = $request->input('user_id');
          $arr_transaction['sender_id']       = '';
          $arr_transaction['amount']          = $plan->plan_amount*(1/100);
          $arr_transaction['activity_reason'] = 'level';
          $arr_transaction['date']            = date('Y-m-d');
          $arr_transaction['approval']        = 'pending';
          $arr_transaction['generator']        = 'system';

          \DB::table('transaction')->insert($arr_transaction);
            }


            

        }
        elseif($parent_under==null)
        {
          /*if($i>=3)
            {
          $arr_transaction                    = [];
          $arr_transaction['reciver_id']      = $parent_under;
          $arr_transaction['sender_id']       = $request->input('user_id');
          $arr_transaction['amount']          = $plan->plan_amount/20;
          $arr_transaction['activity_reason'] = 'Work';
          $arr_transaction['date']            = date('Y-m-d');
          $arr_transaction['approval']        = 'payment_done';
          $arr_transaction['generator']        = 'system';

          \DB::table('transaction')->insert($arr_transaction);
            }
            else
            {
          
          $arr_transaction                    = [];
          $arr_transaction['reciver_id']      = $parent_under;
          $arr_transaction['sender_id']       = $request->input('user_id');
          $arr_transaction['amount']          = $plan->plan_amount/10;
          $arr_transaction['activity_reason'] = 'Work';
          $arr_transaction['date']            = date('Y-m-d');
          $arr_transaction['approval']        = 'payment_done';
          $arr_transaction['generator']        = 'system';

          \DB::table('transaction')->insert($arr_transaction);
            }*/
        }
        else{
            $i--;
        }
      }

    

        

        // links for others
      if ($plan->plan_amount=="500") {

        for ($i=0; $i < $plan->other ; $i++) 
      { 
        $arr_transaction                    = [];
        $arr_transaction['reciver_id']      = '';
        $arr_transaction['sender_id']       = $request->input('user_id');
        $arr_transaction['amount']          = $plan->withdrawl_amt;
        $arr_transaction['activity_reason'] = 'Work';

        $arr_transaction['date']            = date('Y-m-d');
        $arr_transaction['approval']        = 'payment_done';
        $arr_transaction['generator']        = 'sender';

        \DB::table('transaction')->insert($arr_transaction);
      }
        # code...
      }
      else{
      for ($i=0; $i < $plan->other ; $i++) 
      { 
        $arr_transaction                    = [];
        $arr_transaction['reciver_id']      = '';
        $arr_transaction['sender_id']       = $request->input('user_id');
        $arr_transaction['amount']          = $plan->withdrawl_amt;
        $arr_transaction['activity_reason'] = 'Work';

        $arr_transaction['date']            = date('Y-m-d');
        $arr_transaction['approval']        = 'payment_done';
        $arr_transaction['generator']        = 'sender';

        \DB::table('transaction')->insert($arr_transaction);
      }
    }

      
      
      $user_status = Sentinel::registerAndActivate($arr_data); 

      $this->activate_user_with_epin($request->input('e_pin'),$request->input('user_id'));
      
      if(isset($user_status->id) && !empty($user_status->id))
      {
        $arr_user_data                 = [];
        $arr_user_data['user_name']    = $request->input('username');
        $arr_user_data['encrypt_password']    = $request->input('password');
        $arr_user_data['mobile']       = $request->input('mobile');
        $arr_user_data['spencer_id']   = $request->input('sponcer_id');
        $arr_user_data['spencer_name'] = $request->input('spencer_name');
        $arr_user_data['plan']         = $request->input('package');
        $arr_user_data['ifsc']            = $request->input('ifsc');
        $arr_user_data['bank_account_no'] = $request->input('bank_account_no');
        $arr_user_data['branch']          = $request->input('branch');
        $arr_user_data['banck_name']      = $request->input('banck_name');
        $arr_user_data['paytm']           = $request->input('paytm');
        $arr_user_data['phonepe']         = $request->input('phonepe');
        $arr_user_data['tez']             = $request->input('tez');
        $arr_user_data['bhim_upi']        = $request->input('bhim_upi');
        $arr_user_data['joining_date']    = null;//date('Y-m-d');
        $arr_user_data['recommit_count']        = 0;
        
        
        
        
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        
        //print_r($arr_user_data);exit;
        
        for ($i = 0; $i < 6; $i++) 
        {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        
        $arr_user_data['transaction_pin']    = $randomString;

        $arr_user_data['password']        = password_hash($request->input('password'), PASSWORD_DEFAULT);

        
        $this->UserModel->where(['id'=>$user_status->id])->update($arr_user_data);
        
        
        
		$tree_count = $this->UserModel->where(['spencer_id'=>$request->input('sponcer_id')])->count();
       $A = $this->UserModel->where(['email'=>$request->input('sponcer_id')])->update(['tree_count'=>$tree_count]);

       
       
        $data_setting = \DB::table('site_setting')->where('id','=','1')->first();


         
        
        
        $message = "Welcome to ".$data_setting->site_name." Your User Name:".$request->input('username').",User Id:".$request->input('user_id').", Transaction Pin:".$randomString." Password is:".$request->input('password')."";
     
        
      $url='http://sms.fastsmsindia.com/api/sendhttp.php?authkey='.$data_setting->sms_auth.'&mobiles='.$request->input('mobile').'&message='.$message.'&sender='.$data_setting->sms_sender_id.'&route=6';
        
        
         $ch = curl_init();
        curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        ));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $output = curl_exec($ch);
       
        if(curl_errno($ch))
        {
            echo 'error:' . curl_error($ch);
        }
        
        curl_close($ch);
        
        
        $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_POST, 0);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

     $response = curl_exec ($ch);
     $err = curl_error($ch);  //if you need
     curl_close ($ch);
     return $response;
        
        
      }
      Session::flash('success', ''.$message);
   return redirect('admin');
    }
public function activate_user_with_epin($e_pin, $user_email)
  
    {

      /*$e_pin    = $_GET['epin_id'];
      $user_email  = $_GET['user_id'];*/
      
      
      
       $data_ = \DB::table('users')->where('email','=',$user_email)->where('is_active','!=','2')->first();

        if(empty($data_))
        {
            $data['status'] = "fail";
           // $data['name'] = $data_->user_name;
            
            echo "fail";
        }
       
        else
        {
      
     
        //update epin used details
        $arr_transaction                    = [];
        $arr_transaction['usedfor']      = 'registration';
        $arr_transaction['used_by']       = $user_email;
       \DB::table('epin')->where('epin_id','=',$e_pin)->update($arr_transaction);

       //update user becomes active details in user table
        $arr_transaction                    = [];
        $arr_transaction['epin']      = $e_pin;
        $arr_transaction['topup_date']       = date('Y-m-d');
        $data = $this->UserModel->where('email','=',$user_email)->update($arr_transaction);
        
        $user_details= $this->UserModel->where('email','=',$user_email)->first();
        
        $message= "Hello ".$user_email." Your ID is activated with EPIN";

        $this->send_otp($message,$user_details->mobile);
        //add user to autofill_user table with searching auto_sponcer id
       
     
        

                
        }

        
        }




public function forgot_tpin()
    {
      $this->arr_view_data['admin_panel_slug'] = $this->admin_panel_slug;
      $this->arr_view_data['page_title'] = "Forget Password";
      
      return view('admin.forgot_tpin',$this->arr_view_data);
    }


public function forget_transaction_pin(Request $request)
    {

    	if(empty($_POST['username']) || empty($_POST['mobile']))
    	{
    		echo "Invalid Parameters!";

    	}
    	
      $characters = '0123456789';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < 6; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }

      $arr_user_data                 = [];
      $password                      = $randomString;
      $arr_user_data['email']        = $request->input('username');
      $arr_user_data['mobile']       = $request->input('mobile');

      $count = $this->UserModel->where($arr_user_data)->count();
      
      if($count)
      {
        $this->UserModel->where($arr_user_data)->update(['transaction_pin'=>$password]);
        Session::flash('success', 'Password has been sent to user mobile.');
        $mobileno = $request->input('mobile');
      
       









      $data_setting = \DB::table('site_setting')->where('id','=','1')->first();


        $msg="Dear Sir, Your new transaction pin is ".$randomString." for ".$arr_user_data['email']." Please Login Your Account.";
        $url='http://sms.fastsmsindia.com/api/sendhttp.php?authkey='.$data_setting->sms_auth.'&mobiles='.$request->input('mobile').'&message='.$msg.'&sender='.$data_setting->sms_sender_id.'&route=6';
        
         $ch = curl_init();
        curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        ));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $output = curl_exec($ch);
       
        if(curl_errno($ch))
        {
            echo 'error:' . curl_error($ch);
        }
        
        curl_close($ch);
        
        
        $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_POST, 0);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

     $response = curl_exec ($ch);
     $err = curl_error($ch);  //if you need
     curl_close ($ch);
     return $response;
          
        
          
          
          Session::flash('success', 'Transaction pin has been sent successfully.');
         return redirect('admin');
      }
      else
      {
           Session::flash('error', 'Please enter valid details!!!.');
          return redirect('admin/forgot_tpin');
      }
}




     public function forget_password()
    {
      $this->arr_view_data['admin_panel_slug'] = $this->admin_panel_slug;
      $this->arr_view_data['page_title'] = "Forget Password";
      
      return view('admin1.forgot',$this->arr_view_data);
    }




    public function forget_password_process(Request $request)
    {
    	if(empty($_POST['username']) || empty($_POST['mobile']))
    	{
    		echo "Invalid Parameters!";

    	}
    	
      $characters = '0123456789';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < 6; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }

      $arr_user_data                 = [];
      $password                      = password_hash($randomString, PASSWORD_DEFAULT);
      $arr_user_data['email']        = $request->input('username');
      $arr_user_data['mobile']       = $request->input('mobile');

      $count = $this->UserModel->where($arr_user_data)->count();
      if($count)
      {
        $this->UserModel->where($arr_user_data)->update(['password'=>$password]);
        Session::flash('success', 'Password has been sent to user mobile.');
        $mobileno = $request->input('mobile');
      
       







        $data_setting = \DB::table('site_setting')->where('id','=','1')->first();




        $msg="Dear Sir, Your new password is ".$randomString." for ".$arr_user_data['email']." Please Login Your Account.";
        $url='http://sms.fastsmsindia.com/api/sendhttp.php?authkey='.$data_setting->sms_auth.'&mobiles='.$request->input('mobile').'&message='.$msg.'&sender='.$data_setting->sms_sender_id.'&route=6';
         $ch = curl_init();
        curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        ));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $output = curl_exec($ch);
       
        if(curl_errno($ch))
        {
            echo 'error:' . curl_error($ch);
        }
        
        curl_close($ch);
        
        
        $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_POST, 0);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

     $response = curl_exec ($ch);
     $err = curl_error($ch);  //if you need
     curl_close ($ch);
     return $response;
      }
      else
      {
         echo 'error,Please enter valid details!!!';
      }
    }

 public function forget_password_process1(Request $request)
    {

    	if(empty($_POST['username']) || empty($_POST['mobile']))
    	{
    		echo "Invalid Parameters!";

    	}
    	
      $characters = '0123456789';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < 6; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }

      $arr_user_data                 = [];
      $password                      = password_hash($randomString, PASSWORD_DEFAULT);
      $arr_user_data['email']        = $request->input('username');
      $arr_user_data['mobile']       = $request->input('mobile');

      $count = $this->UserModel->where($arr_user_data)->count();
      
      if($count)
      {
        $this->UserModel->where($arr_user_data)->update(['password'=>$password]);
        Session::flash('success', 'Password has been sent to user mobile.');
        $mobileno = $request->input('mobile');
      
       








$data_setting = \DB::table('site_setting')->where('id','=','1')->first();



        $msg="Dear Sir, Your new password is ".$randomString." for ".$arr_user_data['email']." Please Login Your Account.";
        $url='http://sms.fastsmsindia.com/api/sendhttp.php?authkey='.$data_setting->sms_auth.'&mobiles='.$request->input('mobile').'&message='.$msg.'&sender='.$data_setting->sms_sender_id.'&route=6';
        
        $ch = curl_init();
        curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        ));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $output = curl_exec($ch);
       
        if(curl_errno($ch))
        {
            echo 'error:' . curl_error($ch);
        }
        
        curl_close($ch);
        
        
        $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_POST, 0);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

     $response = curl_exec ($ch);
     $err = curl_error($ch);  //if you need
     curl_close ($ch);
     return $response;
          
          
          Session::flash('success', 'Password has been sent successfully.');
         return redirect('admin');
      }
      else
      {
           Session::flash('error', 'Please enter valid details!!!.');
          return redirect('admin');
      }
}


     public function send_otp($message,$number)
    {
         
          $data_setting = \DB::table('site_setting')->where('id','=','1')->first();


        
        $url='http://sms.fastsmsindia.com/api/sendhttp.php?authkey='.$data_setting->sms_auth.'&mobiles='.$number.'&message='.$message.'&sender='.$data_setting->sms_sender_id.'&route=6';
        
         $ch = curl_init();
        curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        ));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $output = curl_exec($ch);
       
        if(curl_errno($ch))
        {
            echo 'error:' . curl_error($ch);
        }
        
        curl_close($ch);
        
        
        $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_POST, 0);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

     $response = curl_exec ($ch);
     $err = curl_error($ch);  //if you need
     curl_close ($ch);
     return $response;
        
    }
      



    public function logout()
    {
      Sentinel::logout();
      return redirect(url($this->admin_panel_slug.'/login'));
    }
}
