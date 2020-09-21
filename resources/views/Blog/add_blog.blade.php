@extends('layouts.master')
@section('data')
<div class="col-lg-12">
 <div class="card text-center">
  <br>
    <div class="card-header" style="background-color:#272c33;color: white;border-radius: 30px; font-size: 30px; ">
     <strong>ADD BLOG</strong> 
    </div>
     <center>
      <div class="card-body card-block">
       <center>
    <form action="{{url('add_blog')}}" method="POST" class="form-horizontal col-md-6 " enctype="multipart/form-data" style="float:inherit;">

         @if(session('flash_message_success'))
         <p class = "alert alert-success">
            {{session('flash_message_success')}}
         </p>
         @endif
         <br>

        {{csrf_field()}}


 
    <div class="row form-group ">
    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">NAME</label></div>
    <div class="col-12 col-md-9"><input type="text" id="name" name="Name" placeholder="Enter NAME" class="form-control"></div>
    </div>

    <div class="row form-group ">
    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">SUBNAME</label></div>
    <div class="col-12 col-md-9"><input type="text" id="Subname" name="Subname" placeholder="Enter Subname" class="form-control"></div>
    </div>


    <div class="row form-group ">
    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">BlogCategory</label></div>
    <div class="col-12 col-md-9">
       <select  name="BlogCategoryID" id="BlogCategoryID" class="form-control">
        
            @foreach($blogcategory as $blogcategory)
            <option value="{{$blogcategory->CategoryId}}">{{$blogcategory->Categoryname}}
            </option>
            @endforeach
       </select>
    </div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Bannerimage</label></div>
    <div class="col-12 col-md-9"><input type="file" id="Bannerimage" name="Bannerimage" placeholder="Bannerimage" class="form-control"></div>
    </div>

    <div class="row form-group">
    <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Mainimage</label></div>
    <div class="col-12 col-md-9"><input type="file" id="Mainimage" name="Mainimage" placeholder="Bannerimage" class="form-control"></div>
    </div>

    <div class="row form-group ">
    <div class="col col-md-3"><label for="hf-email" class=" form-control-label"> Description</label></div>
    <div class="col-12 col-md-9">
    <textarea  type="text" class="form-control" placeholder="Enter Category Description" name="Description" id="mytextarea" ></textarea>
    </div>
    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
    submit
    </button>
    <button type="reset" class="btn btn-danger btn-sm">
    <i class="fa fa-ban"></i> Reset
    </button>
    </div>

   </form>
       </center>
    
</div>


 
    </center>
</div>
@endsection