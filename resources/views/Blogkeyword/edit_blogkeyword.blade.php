@extends('layouts.master')
@section('data')
<div class="col-lg-12">
 <div class="card text-center">
  <br>
    <div class="card-header" style="background-color:#272c33;color: white;border-radius: 30px; font-size: 30px; ">
     <strong>EDIT BLOG KEYWORD</strong> 
    </div>
     <center>
      <div class="card-body card-block">
    <form action="{{url('edit_blogkeyword/'.$keyword->KeywordID)}}" method="POST" class="form-horizontal col-md-6 " style="float: inherit;">

         @if(session('flash_message_success'))
         <p class = "alert alert-success">
            {{session('flash_message_success')}}
         </p>
         @endif
         <br>

        {{csrf_field()}}


<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <div class="row form-group ">
    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Blog Name</label></div>
    <div class="col-12 col-md-9">
       
       <select  name="BlogID" id="BlogID" class="form-control" >
          <option>Blog Name</option>
           @foreach($blog as $blog)
            <option value="{{$blog->BlogId}}"
              @if($keyword->BlogID == $blog->BlogId) selected @endif >
                  {{ $blog->Name }}
            </option>
            @endforeach
       </select>
    </div>
    </div>


     <div class="row form-group ">
    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">KEYWORD</label></div>
    <div class="col-12 col-md-9"><input type="text" id="KeywordName" name="KeywordName" placeholder="Enter KeywordName" class="form-control" value="{{$keyword->KeywordName}}"></div>
    </div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
    submit
    </button>
    <button type="reset" class="btn btn-danger btn-sm">
    <i class="fa fa-ban"></i> Reset
    </button></center>
</div>
    </form>

  

    
</div>

</div>
@endsection