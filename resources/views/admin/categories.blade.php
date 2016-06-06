@extends('admin.master')
@section('css')
    @include('link.tablecss')
    
@stop
@section('content')
  
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                
              </div>

              <div class="title_right">
                
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                @include('link.alert')
              
              </div>

              <!-- Starting table -->              

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{$subtitle}} </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons" class="table table-hover table-striped table-bordered">

                      <thead style="background-color:#3D4456; color:white;">
                        <tr >
                          <th style="text-align:center;">No</th>
                          <th style="text-align:center;">Name</th>
                          <th style="text-align:center;">Created</th>
                          <th style="text-align:center;">Updated</th>                          
                          <th style="text-align:center;">Action</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php $index = 1;?>
                      @foreach ($categories as $category)
                        <tr>
                          <td>{{$index++}}</td>
                          <td>{{$category->category_name}}</td>
                          <td style="text-align:center;">{{$category->created_at}}</td>
                          <td style="text-align:center;">{{$category->updated_at}}</td>                          
                          <td style="text-align:center;">



                            {!! Form::open([
                                'method' => 'DELETE',
                                'url' => ['admin/store/categories/'.$category->id]
                            ]) !!}

                              <!-- Small modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="{{'#modal'.$index}}"><span data-toggle="tooltip" title="Remove Category" class="glyphicon glyphicon-remove"></span></button>

                                <div  class="modal  fade bs-example-modal-sm" id="{{'modal'.$index}}" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content">

                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        <h4 style="text-align:center;" class="modal-title" id="myModalLabel2">Are you Sure ?</h4>
                                      </div>
                                      <div class="modal-body">
                                        <h4>Remove Permanaently?</h4>                                      
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Remove</button>
                                      </div>

                                    </div>
                                  </div>
                                </div>
                                <!-- /modals -->
                              {!! Form::close() !!}        

                          </td>
                        </tr>    
                      @endforeach 
                      <tr>
                        <td colspan="5" style="text-align:center;" >
                        
                          <!-- Add Button -->
                            {!! Form::open([
                                'method' => 'POST',
                                'url' => ['admin/store/categories/add']
                            ]) !!}

                              <!-- Small modal -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="{{'#modaladd'}}"><span data-toggle="tooltip" title="Add new Category" class="glyphicon glyphicon-plus"></span></button>

                                <div  class="modal  fade bs-example-modal-sm" id="{{'modaladd'}}" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content">

                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        <h4 style="text-align:center;" class="modal-title" id="myModalLabel2">Add new Category</h4>
                                      </div>
                                      <div class="modal-body">
                                        <h4>Enter Category name</h4>
                                        <input type="text" name="category_name"></div>                                     
                                      </div>
                                      <div class="modal-footer">                                        
                                        <button type="submit" class="btn btn-primary">Add</button>
                                      </div>

                                    </div>
                                  </div>
                                </div>
                                <!-- /modals -->
                              {!! Form::close() !!} 
                          <!-- Ending Button -->

                        </td>
                      </tr>
                      </tbody>
                    </table>
                    <!-- Ending Table -->                   
                  </div>
                </div>
              </div>       
            </div>
          </div>
        </div>
        
        <!-- /page content -->

  
@stop

@section('script')
    @include('link.tablescript')

@stop