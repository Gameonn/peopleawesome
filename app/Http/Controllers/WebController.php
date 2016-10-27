<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Redirect;
use App\Users;


class WebController extends Controller {


    public static function index(){
        return view('web.home2');   
    }

    public static function home2(){
        return view('web.home');   
    }

    public static function submitVideo(){
        return view('web.submit-video');   
    }

    public static function uploadVideo(){

        $input = Input::all();
        $message = Users::uploadVideo($input);
        
        return Redirect::route('web.submitVideo')->with('message', $message); 
    }

    public static function sendFeedback(){

        $input = Input::all();
        $message = Users::saveFeedback($input);
        
        return redirect()->back()->with('message', $message); 
    }

    public static function addMailingList(){

        $input = Input::all();
        $message = Users::addMailingList($input);
        
        return redirect()->back()->with('message', $message); 
    }
  

    //*************************************************************************************
    //                                  Static Layout Routes
    //*************************************************************************************


    // Static Layouts 
    public function faq() {
        return view('web.faq');
    } 

    public function aboutUs() {
        return view('web.about');
    }  

    public function privacyPolicy() {
        return view('web.privacy-policy');
    } 

    public function contactUs() {
        return view('web.contact');
    } 

    public function terms() {
        return view('web.terms');
    }

    public function uploadVideoTerms() {
        return view('web.terms-submission');
    }

    public function MailingList() {
        return view('web.mailing-list');
    }


}
