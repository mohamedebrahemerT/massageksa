<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use App\settings;
    use Storage; 
    use up;

class setting extends Controller
{
    
     public function index()
     {
     	return view('Admin.setting.settings');
     } 

          public function setting_store(Request $request)
     {

           


     	     $data= $this->validate(request(),[
             'namear' => ['required', 'string', 'max:255'],
             'nameaen' => ['required', 'string', 'max:255'],
             'email' => ['required', 'string', 'email', 'max:255' ],
          // 'siteflag' => 'required| image|mimes:jpg,png,gif,jpeg|max:2048',
          //  'sitesymol' => 'required|image|mimes:jpg,png,gif,jpeg|max:2048',
             'sitesdiscreption' => ['required', 'string', 'max:255'],
             'sitemeta' => ['required', 'string', 'max:255'],
             'language' => ['required', 'string', 'max:255'],
             'status' => ['required', 'string', 'max:255'],

             'facebookLink' => ['required', 'string', 'max:255'],
             'TwitterLink' => ['required', 'string', 'max:255'],
             'GmailLink' => ['required', 'string', 'max:255'],
             'LinkedinLink' => ['required', 'string', 'max:255'],
             'instagramLink' => ['required', 'string', 'max:255'],
             'mapLink' => ['required', 'string'],
             'phone' => ['required', 'string', 'max:255'],
             'address_ar' => ['required', 'string', 'max:255'],
             'address_en' => ['required', 'string', 'max:255'],
              



               ],[],[
	          'namear'=>trans('admin.nameofsitearbic'),
	          'nameaen'=>trans('admin.nameofsiteenglish'),
	          'email'=>trans('admin.email'),
	          'siteflag'=>trans('admin.siteflag'),
	          'sitesymol'=>trans('admin.sitesymol'),
	          'sitesdiscreption'=>trans('admin.sitesdiscreption'),
	          'sitemeta'=>trans('admin.sitemeta'),
	          'language'=>trans('admin.language'),
	          'status'=>trans('admin.status'),
              'maintenance'=>trans('admin.maintenance'),
              
              'facebookLink'=>trans('admin.facebookLink'),
              'TwitterLink'=>trans('admin.TwitterLink'),
              'GmailLink'=>trans('admin.GmailLink'),
              'LinkedinLink'=>trans('admin.LinkedinLink'),
              'instagramLink'=>trans('admin.instagramLink'),
            'mapLink'=>trans('admin.mapLink'),
            'phone'=>trans('admin.mapLink'),
            'address_en'=>trans('admin.address_en'),
	          'address_ar'=>trans('admin.address_ar'),
            


                ]);  
 
 
              /*   $data= $this->validate(request(),
               ['siteflag' => 'required| image|mimes:jpg,png,gif,jpeg|max:2048',
            'sitesymol' => 'required|image|mimes:jpg,png,gif,jpeg|max:2048'],
           
             
            
        [],[
            'siteflag'=>trans('admin.siteflag'),
            'sitesymol'=>trans('admin.sitesymol'),
            
            ]);
         */
                 //return request();

                    if ($request->siteflag) 
               {

            $imageName = time() . '.' . $request->siteflag->extension();
            $request->siteflag->move(public_path('/images/siteflag'), $imageName);
            $data['siteflag'] = 'images/siteflag/'.$imageName;
                  
 
                }

                     if ($request->sitesymol) 
               {

            $imageName = time() . '.' . $request->sitesymol->extension();
            $request->sitesymol->move(public_path('/images/sitesymol'), $imageName);
            $data['sitesymol'] = 'images/sitesymol/'.$imageName;
                  
 
                }
             
                 

               settings::orderBy('id','desc')->update($data);
             session()->flash('success',trans('admin.dataaddsuccessfully'));
       

        return redirect('admin/settings');

      
     } 


}
