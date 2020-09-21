<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\blog;
use App\blogkeyword;

class BlogkeywordController extends Controller
{
    public function add_blogkeyword(Request $request)
    {
    	if($request->isMethod('POST'))
      {
            $data = $request->all();
       
            $keyword = new blogkeyword;
            $keyword->BlogID = $data['BlogID'];
            $keyword->KeywordName = $data['KeywordName'];

            $keyword->save();
        return redirect('add_blogkeyword')->with('flash_message_success','Blog keyword added successfully!!');
      }

    	$blog = blog::where('BlogId','>',0)->get();
    	return view('Blogkeyword.add_blogkeyword',compact('blog'));
    }



    public function view_blogkeyword()
    {
        $viewkeyword = blogkeyword::get();
        return view('Blogkeyword.view_blogkeyword',compact('viewkeyword'));
    }

    


   public function Keyword_Status(Request $request)
    {
      $data = $request->all();
      // return ($data);
      blogkeyword::where('KeywordID','=',$data['id'])->update(['Status'=>$data['Status']]);
    }



    public function edit_blogkeyword(Request $request,$id)
    {
         if($request->isMethod('post'))
      {
         $data = $request->all();

          blogkeyword::where(['KeywordID'=>$id])->update(['KeywordName'=>$data['KeywordName'],
              'BlogID'=>$data['BlogID'],
               ]);
              return redirect('view_blogkeyword')->with('flash_message_success','Blogkeyword has been updated!!');
          }        

        $keyword = blogkeyword::where('KeywordID','=',$id)->first();
        $blog = blog::get();

        return view('Blogkeyword.edit_blogkeyword', compact('keyword','blog'));
    }


     public function delete_blogkeyword($id)
    {
        blogkeyword::where(['KeywordID'=>$id])->delete();
       return redirect('view_blogkeyword')->with('flash_message_success','Blogkeyword deleted successfully!!');
    }

}
