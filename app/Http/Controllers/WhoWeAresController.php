<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\WhoWeAredatatables;
use App\WhoWeAre;
  use Hash;
  use up;
  use Storage;
use App\filess;
  

class WhoWeAresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          $WhoWeAre=WhoWeAre::get();
         return view('Admin.WhoWeAre.index',compact('WhoWeAre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $WhoWeAre=WhoWeAre::create(['photo'=>'']);
 

             return redirect('admin/WhoWeAre/'.$WhoWeAre->id.'/edit'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              

          $data= $this->validate(request(),[    
                'WhoWeAre_name_en' => ['required', 'string', 'max:1000'],
                'WhoWeAre_name_ar' => ['required', 'string', 'max:1000'],
               
            
            ],[],[
            'WhoWeAre_name_en'=>trans('admin.WhoWeAre_name_en'),
            'WhoWeAre_name_ar'=>trans('admin.WhoWeAre_name_arr'),
         
             
            


            ]);
                   
      

         WhoWeAre::create($data);

                return Response(['status'=>true,'message'=>trans('admin.dataaddsuccessfully'),'data'=>$data],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $title=trans('admin.WhoWeAre update');
          $WhoWeAre=WhoWeAre::find($id);

       return view('Admin.WhoWeAre.update',compact('title','WhoWeAre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {       

         
            Request();
        $data= $this->validate(request(),[    

               'title_name_en' => ['required', 'string', 'max:1000'],
                'title_name_ar' => ['required', 'string', 'max:1000'],
                

                'WhoWeAre_name_en' => ['required', 'string', 'max:1000'],
                'WhoWeAre_name_ar' => ['required', 'string', 'max:1000'],
             
                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     
            
            ],[],[
            'WhoWeAre_name_en'=>trans('admin.WhoWeAre_name_en'),
            'WhoWeAre_name_ar'=>trans('admin.WhoWeAre_name_arr'),
           
             
             'title_name_en'=>trans('admin.title_name_en'),
            'title_name_ar'=>trans('admin.title_name_arr'),
            
             
            


            ]);
                   
      

         WhoWeAre::where('id',$id)->update($data);
   
                return Response(['status'=>true,'message'=>trans('admin.dataaupdatedsuccessfully'),'data'=>$data],200);

  
 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             $WhoWeAre=WhoWeAre::find($id);
               Storage::delete($WhoWeAre->photo);
         WhoWeAre::find($id)->delete();
           session()->flash('success',trans('admin.deleteWhoWeAre'));
       

         return redirect('admin/WhoWeAre');
    }

       public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) 
        {
               foreach (request('item') as $id  ) 
               {

                     $WhoWeAre=WhoWeAre::find($id);
               Storage::delete($WhoWeAre->photo);
                $WhoWeAre->delete(); 
               }
            
          

        }
        else
        {
                    $WhoWeAre=WhoWeAre::find($id);
               Storage::delete($WhoWeAre->photo);
                $WhoWeAre->delete(); 
        
        }
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/WhoWeAre');

         
    }

     


      public function update_img_dropzon_FAQs($id  ,Request $request)
               {

                      if ($request->file) 
               {

            $imageName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('/images/WhoWeAre'), $imageName);
            $data['photo'] = 'images/WhoWeAre/'.$imageName;
                    $settings = WhoWeAre::find($id);  
      WhoWeAre::where('id', $id)->update($data);
 
 
                }
 

               

             
                
               }


               public function delete_img_dropzon_WhoWeAre($id)
               {
                    $WhoWeAre = WhoWeAre::find($id);

                   
                        Storage::delete( $WhoWeAre->photo);
                           $WhoWeAre->photo=null;
                        $WhoWeAre->save();

                        return Response('كلو تمام');

               }
}


