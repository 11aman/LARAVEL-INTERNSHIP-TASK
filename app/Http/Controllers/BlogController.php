<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\blogcategory;
use Illuminate\Support\Str;
use App\blog;

class BlogController extends Controller
{
   public function add_blog(Request $request)
   {
     if($request->isMethod('POST'))
      {

            $data = $request->all();
       
            $input = new blog;
            $input->Name = $data['Name'];
            $input->Subname = $data['Subname'];
            $input->BlogCategoryID = $data['BlogCategoryID'];
            $input->Description = $data['Description'];

         
            //MAIN IMAGE STORE
            $url="http://127.0.0.1:8000/storage/";
            $file = $request->file('Mainimage');
            $extension=$file->getClientOriginalExtension();
            $mainimgpath=$request->file('Mainimage')->storeAs('blog','Mainimage' .time().'.'.
            $request->Mainimage->extension());
            
            $input->Mainimage = $url.$mainimgpath;
             
            
            //BANNER IAMGE STORE
            $url="http://127.0.0.1:8000/storage/";
            $image = $request->file('Bannerimage');
                 
            $extension=$file->getClientOriginalExtension();
            $bannerimgpath=$request->file('Bannerimage')->storeAs('blog','Bannerimage' .time().'.'.
            $request->Bannerimage->extension());
            $input->Bannerimage = $url.$bannerimgpath;
           // dd($input);

            $input->save();


        return redirect('add_blog')->with('flash_message_success','Blog added successfully!!');
      }
      

     $blogcategory = blogcategory::where('CategoryID','>',0)->get();
     return view('blog.add_blog')->with(compact('blogcategory'));
   }


   public function view_blog()
   {
   	 $view = blog::get();
   	 return view('Blog.view_blog')->with(compact('view'));
   }


   public function edit_blog(Request $request,$id)
   {
   	 if($request->isMethod('post'))
      {
     
        $data = $request->all();
        //dd($data, $id);

        global $Bannerimage;
        global $Mainimage;

           if($request->hasfile('Bannerimage'))
        		{
        			echo $banner_img_tmp = Input::file('Bannerimage');
        			if($banner_img_tmp->isValid())
        			{
                $url="http://127.0.0.1:8000/storage/";
                $file = $request->file('Bannerimage');
                     
                $extension=$file->getClientOriginalExtension();
                $bannerimgpath=$request->file('Bannerimage')->storeAs('blog','Bannerimage' .time().'.'.
                $request->Bannerimage->extension());
                $Bannerimage = $url.$bannerimgpath;
        		    }
        		 }
             else
              {
                $Bannerimage = $data['current_Bannerimage']; 
              }


              if($request->hasfile('Mainimage'))
    	       {
          			echo $main_img_tmp = Input::file('Mainimage');
          			if($main_img_tmp->isValid())
          			{
                       $url="http://127.0.0.1:8000/storage/";
                       $file = $request->file('Mainimage');
                       $extension=$file->getClientOriginalExtension();
                       $mainimgpath=$request->file('Mainimage')->storeAs('blog','Mainimage' .time().'.'.
                       $request->Mainimage->extension());
                       
                       $Mainimage = $url.$mainimgpath;
          		    }
              }
              else
              {
               $Mainimage = $data['current_Mainimage'];
              }

                if(empty($data['Description'])){
                    $data['Description'] = '';
                }
              blog::where(['BlogId'=>$id])->update(['Name'=>$data['Name'],
          	   'Subname'=>$data['Subname'],'BlogCategoryID'=>$data['BlogCategoryID'],
          	   'Description'=>$data['Description'],'Bannerimage'=>$Bannerimage,
          	   'Mainimage'=>$Mainimage]);


                  return redirect('view_blog')->with('flash_message_success','Blog has been updated!!');
                  }

               	$edit = blog::where('BlogId','=', $id)->first();
               	//dd($edit);
               	$cat = blogcategory::get();
               	return view('Blog.edit_blog')->with(compact('edit','cat'));
     }

   
    public function delete_blog($id)
    {
        blog::where(['BlogId'=>$id])->delete();
       return redirect('view_blog')->with('flash_message_success','Blog deleted successfully!!');
    }

     public function updateblog_status(Request $request)
    {
      $data = $request->all();
      blog::where('BlogId','=',$data['id'])->update(['Status'=>$data['Status']]);
    }

}
