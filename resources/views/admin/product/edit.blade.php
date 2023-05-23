@extends('layouts.admin')
@section('container-fluid py-4')
    <div class="card" >
        <div class="card-header">
            <h4>Edit  Product</h4>
        </div>
        <div class="card-body">
            <form action="{{url('update-product/'.$product->id)}}" method="POST" enctype="multipart/form-data" >
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label  class="control-label col-sm-2" >Select a Category:</label>
                    <div class="col-sm-10">
                    <select class="form-select"  name="cate_id"   >

                        <option value="{{$product->cate_id}}">{{$product->category->name}}</option>
                        @foreach ($category as $item )
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach

                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="control-label col-sm-2" >Name:</label>
                    <div class="col-sm-10">
                      <input  type="text" class="form-control" value="{{$product->name}}" style="background-color: rgba(255, 0, 221, 0.2);  " placeholder="Enter name" name="name">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-sm-2" >Slug:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="{{$product->slug}}" style="background-color: rgba(255, 0, 221, 0.2);  "  placeholder="Enter slug" name="slug"  >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" >Small Description:</label>
                    <div class="col-sm-10">
                      <input type="text"  value="{{$product->small_description}}" class="form-control" style="background-color: rgba(255, 0, 221, 0.2);  "

                      name="small_description"  >
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-sm-2" >Description:</label>
                    <div class="col-sm-10">
                        <textarea name="description" style="background-color: rgba(255, 0, 221, 0.2);  " class="form-control">{{$product->description}}</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" >Original Price:</label>
                    <div class="col-sm-2">
                      <input type="number"  value="{{$product->original_price}}" class="form-control" style="background-color: rgba(255, 0, 221, 0.2);  "

                      name="original_price"  >
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" >Selling Price:</label>
                    <div class="col-sm-10">
                      <input type="number" value="{{$product->selling_price}}" class="form-control" style="background-color: rgba(255, 0, 221, 0.2);  "

                      name="selling_price"  >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" >Quantity:</label>
                    <div class="col-sm-2">
                      <input type="number" value="{{$product->qty}}" class="form-control" style="background-color: rgba(255, 0, 221, 0.2);  "

                      name="qty"  >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" >Tax:</label>
                    <div class="col-sm-10">
                      <input type="number" value="{{$product->tax}}" class="form-control" style="background-color: rgba(255, 0, 221, 0.2);  "

                      name="tax"  >
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label><input type="checkbox" {{$product->status == "1" ? 'checked' :''}} style="background-color: rgba(255, 0, 221, 0.2);  " name="status"> Status</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label><input type="checkbox" {{$product->trending == "1" ? 'checked' : ''}} style="background-color: rgba(255, 0, 221, 0.2);  " name="trending">Trending</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" >Meta Title:</label>
                    <div class="col-sm-10">
                      <input type="text" value="{{$product->meta_title}}" class="form-control" style="background-color: rgba(255, 0, 221, 0.2);  "  name="meta_title">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" >Meta Description:</label>
                    <div class="col-sm-10">
                        <textarea name="meta_description" style="background-color: rgba(255, 0, 221, 0.2);  " class="form-control">{{$product->meta_description}}</textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2">Meta Keywords:</label>
                    <div class="col-sm-10">
                        <textarea name="meta_keywords"style="background-color: rgba(255, 0, 221, 0.2);  "  class="form-control">{{$product->meta_keywords}}</textarea>
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
