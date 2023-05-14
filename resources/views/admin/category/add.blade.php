@extends('layouts.admin')
@section('container-fluid py-4')
    <div class="tag" >
        <div class="tag-header">
            <h4>Add  Category</h4>
        </div>
        <div class="tag-body">
            <form action="{{url('insert-category')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label  class="control-label col-sm-2" >Name:</label>
                    <div class="col-sm-10">
                      <input  type="text" class="form-control"  style="background-color: rgba(255, 0, 221, 0.2);  " placeholder="Enter name" name="name">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-sm-2" >Slug:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" style="background-color: rgba(255, 0, 221, 0.2);  "  placeholder="Enter slug" name="slug"  >
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" >Description:</label>
                    <div class="col-sm-10">
                        <textarea name="description" style="background-color: rgba(255, 0, 221, 0.2);  " class="form-control"></textarea>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label><input type="checkbox" style="background-color: rgba(255, 0, 221, 0.2);  " name="status"> Status</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label><input type="checkbox" style="background-color: rgba(255, 0, 221, 0.2);  " name="popular">Popular</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" >Meta Title:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" style="background-color: rgba(255, 0, 221, 0.2);  "  name="meta_title">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" >Meta Description:</label>
                    <div class="col-sm-10">
                        <textarea name="meta_description" style="background-color: rgba(255, 0, 221, 0.2);  " class="form-control"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2">Meta Keywords:</label>
                    <div class="col-sm-10">
                        <textarea name="meta_keywords"style="background-color: rgba(255, 0, 221, 0.2);  "  class="form-control"></textarea>
                    </div>
                  </div>

                  <div class="form-group">

                    <div class="col-sm-2 mt-2">
                      <input type="file"  class="form-control"  style="background-color: rgba(185, 255, 231, 1); border-radius: 10px;"  name="image">
                    </div>
                  </div>





                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10 mt-2">
                      <button type="submit" style="background-color: rgba(247, 0, 255, 1); "  class="btn btn-default">Submit</button>
                    </div>
                  </div>

            </form>
            </div>
    </div>
@endsection




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
