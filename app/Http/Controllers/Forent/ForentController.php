<?php

namespace App\Http\Controllers\Forent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Contact;
use App\Models\admin;
use App\Models\FrontTowfirstsec;

use Hash;
use Auth;
use Illuminate\Support\Facades\Validator;

class ForentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        
        $setting = Setting::first();
        $FrontTowfirstsec = FrontTowfirstsec::first();
  
      
        return view(get_setting('landingpage').'.index',compact('setting','FrontTowfirstsec'));
    }

    
     public function contact(Request $request)
    {

     /*    $messages = [
            'g-recaptcha-response.required' => 'يجب عليك التحقق من reCAPTCHA.',
            'g-recaptcha-response.captcha' => 'يجب عليك التحقق من reCAPTCHA.',
        ];
 
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|captcha'
        ], $messages);
 
        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }
*/

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        if ($contact)
        {
               session()->flash('success', 'شكرا لتواصلك معنا، سوف يقوم القسم المختص بالرد عليكم في أقرب وقت.');
            return redirect()->back();
        }
        session()->flash('error', 'حدث خطأ ما');
        return redirect()->back();
    }
     public function signup (Request $request)
     {

      /*   $messages = [
            'g-recaptcha-response.required' => 'يجب عليك التحقق من reCAPTCHA.',
            'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
        ];
 
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|captcha'
        ], $messages);
 
        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }
        */
         $data = $this->validate(\request(),
            [
                 
                        'phone'=>'required|unique:admins',
                        'email'=>'required|email|unique:admins',
                        

            ]);

            if ($request->type == 'shipping_emp') 
         {
             $group_id=3;
             
         }
         elseif ($request->type == 'representative') 
         {
             $group_id=6;
              
         }
         else
         {
             $group_id=2;
         }
                       
        if (setting()->enbleautologin == "1") 
       {
        $status='1';
       }
       else
       {
        $status='0';

       }
        $admin = admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
            'phone' => $request->phone,
            'Business_name' => $request->Business_name,
            'Region' => $request->Region,
            'City' => $request->City,
            'Address_1' => $request->Address_1,
            'Address_2' => $request->Address_2,
            'type' => $request->type,
            'status' =>$status,
            'group_id' =>$group_id, 
            
        ]);

session()->flash('success', '  تم تسجيل طلبك وسوف يقوم القسم المختص بالرد عليكم في اقرب وقت');


       if (setting()->enbleautologin == "1") 
       {
             if ($admin)
        {
     session()->flash('success', 'شكرا للتسجل معنا .تم تسجيل الدخول بنجاح');
                     admin()->login($admin);
                    if ($admin->type == 'shipping_emp')
                     {
                         return redirect('/shipping_EmpDashboard');
                    }
                    else
                    {
                         return redirect('/MerchantDashboard');
                        
                    }
        }
       }
       
        return redirect()->back();
       
     }
  

      ////forent2

      public function front2()
    {
        
        $setting = Setting::first();
        $FrontTowfirstsec = FrontTowfirstsec::first();
        return view('front2.home',compact('setting','FrontTowfirstsec'));
    }

      public function about_us()
    {
        
        $setting = Setting::first();
        return view('front2.about_us.about_us');
    }
   public function sign_up()
    {
        
        $setting = Setting::first();
        return view('front2.sign_up.sign_up');
    }

     public function login()
    {
        
        $setting = Setting::first();
        return view('front2.login.login');
    }

      public function terms()
    {
        $setting = Setting::first();
        return view('front2.terms.terms',compact('setting'));
    }

    public function privacy($lang=null)
    {
         
        $setting = Setting::first();
        return view('front2.terms.privacy',compact('setting'));
    }

    public function contact_us($lang=null)
    {
         
      
        return view('front2.contact_us.contact_us');
    }


    
}
