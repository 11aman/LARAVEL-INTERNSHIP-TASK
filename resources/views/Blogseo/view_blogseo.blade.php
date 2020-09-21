 @extends('layouts.master')
 @section('data')




 <div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">

    <div class="col-md-12">

      <div id="message_success" style="display:none;" class="alert alert-success"> Status Enabled </div>

      <div id="message_error" style="display:none;" class="alert alert-danger"> Status Disabled </div>

      @if(session('flash_message_success'))

         <p class = "alert alert-success">
            {{session('flash_message_success')}}
         </p>
         @endif
         <br>

                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">BLOGSEO LIST</strong>
                            </div>
                            <div class="card-body">
                                
                                    <table id="table_id" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Seo ID</th>
                                            <th>Meta Title</th>
                                            <th>Meta Description</th>
                                            <th>Meta Keyword</th> 
                                            <th>Index Follow</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                        @foreach($viewseo as $viewseo)

                                        <tr>
                                            <td>{{$viewseo->SeoID}}</td>
                                            <td>{{$viewseo->MetaTitle}}</td>
                                            <td>{{$viewseo->MetaDescription}}</td>
                                            <td>{{$viewseo->MetaKeyword}}</td>

                                          <td>
                                          <input type="checkbox" class="BlogseoIndex btn btn-success" rel="{{$viewseo->SeoID}}" data-toggle="toggle" data-on="Enabled" data-of="Disabled" @if($viewseo['IndexFollow']=="1") checked @endif>
                                          <div id="myElem" style="display:none;" class="alert alert-success">
                                             Status Enabled
                                          </div>
                                          </td>

                                            <td>
                                          
                                          <a href="{{url('edit_blogseo/'.$viewseo->SeoID)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a> 
                                          <a href="{{url('delete_blogseo/'.$viewseo->SeoID)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                                       </td>
                                        </tr>
                                        @endforeach

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        @endsection