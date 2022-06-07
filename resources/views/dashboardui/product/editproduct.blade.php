@extends('dashboardui.master')
@section('content')
<div class="col-xl-8 order-xl-1" style="margin-left: 20%; margin-top: 2%;">
  <div class="card">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col-8">
          <h3 class="mb-0">Edit products </h3>
        </div>
      </div>

      <div class="card-body">
        <form action="{{route('productUpdate',$itm->id)}}" enctype="multipart/form-data">
          <h6 class="heading-small text-muted mb-4"> Edit Product information</h6>
          <div class="pl-lg-4">

            <div class="col-lg-9">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Product Name</label>
                <input type="text" id="input-username" name="name" class="form-control" value="{{$itm->name}}">
              </div>
            </div>
            <div class="col-lg-9">
              <div class="form-group">
                <label class="form-control-label" for="input-email">Price</label>
                <input type="text" id="input-price" name="price" value="{{$itm->price}}" class="form-control">
              </div>
            </div>
            <div class="col-lg-9">
              <div class="form-group">
                <label class="form-control-label" for="input-first-name">Images</label>
                <input type="file" id="myFile" name="image" value="{{$itm->image}}" class="form-control">
              </div>
            </div>
            <div class="col-lg-9">
              <div class="form-group">
                <label class="form-control-label" for="input-last-name">Description</label>
                <input rows="4" class="form-control" value="{{$itm->description}}" name="description">
              </div>
            </div>
            <div class="col-4 text-right" style="margin-left: 50%;">
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection