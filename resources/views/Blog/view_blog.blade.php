 @extends('layouts.master')
 @section('data')



 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">BLOG LIST</strong>
                            </div>
                            <div class="card-body">

                                <div id="message_success" style="display:none;" class="alert alert-success"> Status Enabled </div>

                                <div id="message_error" style="display:none;" class="alert alert-danger"> Status Disabled </div>

                                   @if(session('flash_message_success'))
                                   <p class = "alert alert-success">
                                   {{session('flash_message_success')}}
                                   </p>
                                   @endif
                                   <br>

                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Blog ID</th>
                                            <th>NAME</th>
                                            <th>SUB NAME</th>
                                      
                                             <th>Description</th>
                                            <th>Banner Image</th>
                                            <th>Main Image</th>
                                            <th>Status</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        @foreach($view as $view)
                                         <tr>
                                            <td>{{$view->BlogId}}</td>
                                            <td>{{$view->Name}}</td>
                                            <td>{{$view->Subname}}</td>
                                           
                                    
                                            <td>{{ Str::limit($view->Description, 10) }}</td>
                                            

                                             <td>
                                            @if(!empty($view->Bannerimage))
                                              <img src="{{$view->Bannerimage}}" alt="" style="width:100px;">
                                            </td>
                                            @endif
                                            <td>
                                            @if(!empty($view->Mainimage))
                                          <img src="{{$view->Mainimage}}" alt="" style="width:100px;">
                                            </td>
                                            @endif

                                           



                                          <td>
                                          <input type="checkbox" class="Status btn btn-success" rel="{{$view->BlogId}}" data-toggle="toggle" data-on="Enabled" data-of="Disabled"  @if($view['Status']=="1") checked @endif>
                                          
                                          <div id="myElem" style="display:none;" class="alert alert-success">
                                             Status Enabled
                                          </div>
                                          </td>



                                        <td >
                                          <a href="{{url('edit_blog/'.$view->BlogId)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a> 

                                          <a href="{{url('delete_blog/'.$view->BlogId)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
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