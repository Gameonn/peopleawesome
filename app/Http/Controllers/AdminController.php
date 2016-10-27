<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Redirect;
use App\Admin;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('admin', ['except' => 'administrator/login']);
    }

    public function dashboard() {
       $dashboard_details = Admin::dashboard();

       return view('admin.dashboard')
           ->with('dashboard_details', $dashboard_details);        
    }

    public function videoListing() {
       $video_details = Admin::videoDetails();
     
       return view('admin.video-listing')
           ->with('video_details', $video_details);        
    }

    public function messageListing() {
       $message_details = Admin::messageDetails();

       return view('admin.message-listing')
           ->with('message_details', $message_details);        
    }

    public function mailListing() {
       $mail_details = Admin::mailListing();

       return view('admin.mail-listing')
           ->with('mail_details', $mail_details);        
    }

    public static function setVideoStatus(){

        $input = Input::all();
        $message = Admin::setVideoStatus($input);
        
        return 1; 
    }

    // Change Password Functions
    public function changePassword() {                
        return view('admin.change-password');
    }

    public function changePasswordCode() { 
        $input = Input::all();
        $response = Admin::changePasswordCode($input);
        $dashboard_details = Word::dashboard();
        $word_counts=Word::getWordCount();

        if($response==1) {
            return view('admin/dashboard')
            ->with('dashboard_details', $dashboard_details)
            ->with('word_counts', $word_counts);
        }
        else {
            return view('admin.change-password')
                ->with('response', $response);
        }        
    }    

}
