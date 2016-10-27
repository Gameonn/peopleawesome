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
// use Illuminate\Support\Facades\Mail;

class Admin extends Model {

    // Validation Rules

    public static $loginRules = array(
        'username' => 'required',
        'password' => 'required',
    );

    public static $changePasswordCodeRules = array(
        'old_password' => 'required',
        'new_password' => 'required',
        'confirm_password' => 'required',
    );    

    // Common Functions

    public static function generateAndSaveUserToken($user_id) {

        $token = str_random(30);
        DB::table('admin')->where('id', $user_id)->update(['remember_token' => $token]);
        return $token;

    }



    public static function login($input) {

        $validation = Validator::make($input, Admin::$loginRules);
        if($validation->fails()) {
            return 0;
        }
        else {

            $username = $input['username'];
            $password = $input['password'];

            $admin_check = DB::table('admin')->select('id', 'password')->where('username', $username)->first();

            if(isset($admin_check)) {
                
                if(Hash::check($password, $admin_check->password)) {

                    $remember_token = Admin::generateAndSaveUserToken($admin_check->id);
                    Session::put('remember_token', $remember_token);

                    Session::get('remember_token');

                    return 1;
                }
                // Password incorrect
                else
                    return 0;
            }
            else
                return 0;
        }

    }

    public static function dashboard(){

        $dashboard = DB::select(
            "SELECT count(`id`) as mailing_list_count,
            (SELECT count(`id`) FROM `user_feedback`) AS `user_feedback_count`,
            (SELECT count(`id`) FROM `user_videos`) AS `user_videos_count`
            FROM `mailing_list` ");        

        return $dashboard;
    }

    public static function videoDetails(){

        $video_details = DB::table('user_videos')->select('*')->where('is_deleted',0)->orderBy('id','DESC')->get();
        return $video_details;
    }

    public static function messageDetails(){

        $message_details = DB::table('user_feedback')->select('*')->orderBy('id','DESC')->get();
        return $message_details;
    }

    public static function mailListing(){

        $mail_details = DB::table('mailing_list')->select('*')->orderBy('id','DESC')->get();
        return $mail_details;
    }


    // set video status
    public static function setVideoStatus($input) {

            $video_id = $input['video_id'];
            $status = $input['status'];
            $current_time = Carbon::now();         
      
            DB::table('user_videos')->where('id', $video_id)->update(['status' => $status]);

                // self::sendEmail($input);

                return "Video Status Updated";                             
        
    }


    public static function changePasswordCode($input) {

        $validation = Validator::make($input, Admin::$changePasswordCodeRules);
        if($validation->fails()) {
            return $validation->getMessageBag()->first();
        }
        else {

            $old_password = $input['old_password'];
            $new_password = $input['new_password'];
            $confirm_password = $input['confirm_password'];
            $new_password_hash = Hash::make($new_password);
            // $old_password_hash = Hash::make($old_password);

            $admin_check = DB::table('admin')->select('id', 'password')->where('username', 'admin')->first();
            
            if(isset($admin_check)) {

                if(Hash::check($old_password, $admin_check->password)) {
                    
                    if($new_password == $confirm_password) {

                        DB::table('admin')->where('id', '1')->update(['password' => $new_password_hash]);
                        return 1;
                    }
                    else
                        return "Password do not match";    
                }
                else
                    return "Invalid Password";
            }
            else
                return "Invalid User";
        }

    }

}
