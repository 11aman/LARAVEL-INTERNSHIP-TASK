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

    		//image upload syntax
    		if($request->hasfile('Mainimage'))
    		{
    			echo $main_img_tmp = Input::file('Mainimage');
    			if($main_img_tmp->isValid())
    			{
                  $file = $request->file('Mainimage');
                  $filename = 'Mainimage'.time().'.'.$request->Mainimage->extension();
                  $file->move('upload/mainimage', $filename);

    			  $input->Mainimage = $filename;
    		    }
            }
            else
            {
            	$input->Mainimage = " "; 
            }


            if($request->hasfile('Bannerimage'))
    		{
    			echo $banner_img_tmp = Input::file('Bannerimage');
    			if($banner_img_tmp->isValid())
    			{
                  $image = $request->file('Bannerimage');
                  $imagename = 'Bannerimage'.time().'.'.$request->Bannerimage->extension();
                  $image->move('upload/bannerimage', $imagename);

    			 $input->Bannerimage = $imagename;
    		    }
            }
            else
            {
            	$input->Bannerimage = " "; 
            }

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

       
           if($request->hasfile('Bannerimage'))
    		{
    			echo $banner_img_tmp = Input::file('Bannerimage');
    			if($banner_img_tmp->isValid())
    			{
                  $image = $request->file('Bannerimage');
                  $imagename = 'Bannerimage'.time().'.'.$request->Bannerimage->extension();
                  $image->move('upload/bannerimage', $imagename);

    			 $input->Bannerimage = $imagename;
    		    }
    		 }
             else
              {
                $imagename = $data['current_Bannerimage']; 
              }


              if($request->hasfile('Mainimage'))
    	      {
    			echo $main_img_tmp = Input::file('Mainimage');
    			if($main_img_tmp->isValid())
    			{
                  $file = $request->file('Mainimage');
                  $filename = 'Mainimage'.time().'.'.$request->Mainimage->extension();
                  $file->move('upload/mainimage', $filename);

    			  $input->Mainimage = $filename;
    		    }
                }
                else
                {
                 $filename = $data['current_Mainimage'];
                 }

                if(empty($data['Description'])){
                $data['Description'] = '';
                }
              blog::where(['BlogId'=>$id])->update(['Name'=>$data['Name'],
          	   'Subname'=>$data['Subname'],'BlogCategoryID'=>$data['BlogCategoryID'],
          	   'Description'=>$data['Description'],'Bannerimage'=>$imagename,
          	   'Mainimage'=>$filename]);


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
