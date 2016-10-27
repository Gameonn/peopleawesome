<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;


class Users extends Model {


//*************************************************************************************
//                                     Validation Rules
//************************************************************************************* 

    public static $uploadVideoRules = array(
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'video_url' => 'required',
        'g-recaptcha-response' => 'required|captcha',
    );	

    public static $saveFeedbackRules = array(
        'first_name' => 'required',
        'email' => 'required|email',
        'contact_message' => 'required'
    );

	public static $addMailingRules = array(
        'email' => 'required|email',
        'country' => 'required',        
        'g-recaptcha-response' => 'required|captcha',
    );

    

//*************************************************************************************
//                                     Common Functions
//*************************************************************************************
    
    public static function generateAndSaveUserToken($user_id) {

        $token = str_random(30);
        DB::table('users')->where('id', $user_id)->update(['remember_token' => $token]);
        return $token;
    }


    // public static function sendEmail($input) {

    //     // Send Contact us Email
    //     $to = 'jindal.ankit89@gmail.com';
    //     $subject = "User Feeback";

    //     $message = "            
    //         <html>
    //             <head>
    //                 <title>CheckthisOut</title>
    //             </head>
    //             <body>
    //                 <div style='width:500px; margin:10px auto'>

    //                     <div style='text-align:center'>
    //                         <img src='{{URL::to('/')}}/assets/images/logo-fixed-menu.png' class='login-logo'>
    //                     </div>

    //                     <p style='font-size:20px; color:#333'> New Message sent from $input['first_name'] with $input['email']
    //                     </p>

    //                     <p style='font-size:20px; color:#333'>$input['contact_message'] </p>                       
    //                 </div>
    //             </body>
    //         </html> ";

    //         $headers = "MIME-Version: 1.0" . "\r\n";
    //         $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    //         $headers .= 'X-Mailer: PHP/' . phpversion();

    //     mail($to,$subject,$message,$headers);

    // }



//*************************************************************************************
//                                     User Functions
//*************************************************************************************

    // Upload Video
    public static function uploadVideo($input) {

        $validation = Validator::make($input, Users::$uploadVideoRules);
        if($validation->fails()) {
            return $validation->getMessageBag()->first();
        }
        else {

            $first_name = $input['first_name'];
            $last_name = $input['last_name'];
            $email = $input['email'];
            $phone = $input['phone']; 
            $video_url=$input['video_url'];
            $current_time = Carbon::now();         

                $video_id = DB::table('user_videos')->insertGetId(array(                
                    'first_name' => $first_name,
                    'email' => $email,
                    'last_name' => $last_name,
                    'phone' => $phone,
                    'video_url' => $video_url,
                    'status'=> 0,
                    'is_deleted' => 0,
                    'created_at' => $current_time,
                ));

                return "THANK YOU FOR YOUR SUBMISSION!!! SUBMIT MORE VIDEOS...";                             
        }

    }


    // save feedback
    public static function saveFeedback($input) {

        $validation = Validator::make($input, Users::$saveFeedbackRules);
        if($validation->fails()) {
            return $validation->getMessageBag()->first();
        }
        else {

            $first_name = $input['first_name'];
            $email = $input['email'];
            $type = $input['contact_topic']; 
            $contact_message=$input['contact_message'];
            $current_time = Carbon::now();         

                $feedback_id = DB::table('user_feedback')->insertGetId(array(                
                    'name' => $first_name,
                    'email' => $email,
                    'type' => $type,
                    'message' => $contact_message,
                    'created_at' => $current_time,
                ));

                // self::sendEmail($input);

                return "THANK YOU!!! Your Message was sent. We will reply you soon.";                             
        }

    }


    // add mailing list
    public static function addMailingList($input) {

        $validation = Validator::make($input, Users::$addMailingRules);
        if($validation->fails()) {
            return $validation->getMessageBag()->first();
        }
        else {

            $email = $input['email'];
            $country = $input['country']; 
            $current_time = Carbon::now();         

                $feedback_id = DB::table('mailing_list')->insertGetId(array(
                    'email' => $email,
                    'country' => $country,
                    'created_at' => $current_time,
                ));

                // self::sendEmail($input);

                return "THANK YOU!!! You have been added to the mailing list.";                             
        }

    }

}
