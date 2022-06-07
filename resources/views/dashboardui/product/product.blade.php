@extends('dashboardui.master')
@section('content')
<div class="col-xl-8 order-xl-1" style="margin-left: 20%; margin-top: 2%;">
  <div class="card">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col-8">
          <h3 class="mb-0">Add products </h3>
        </div>

      </div>
    </div>
    
      <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
          <h6 class="heading-small text-muted mb-4">Product information</h6>
          <div class="pl-lg-4">

            <div class="col-lg-9">
              <div class="form-group">
                <label class="form-control-label" for="input-name">Product Name</label>
                <input type="text" id="input-username" name="name" class="form-control" placeholder=" Product name">
              </div>
            </div>
            <div class="col-lg-9 ">
              <div class="form-group">
                <label class="form-control-label" for="input-price">Price</label>
                <input type="text" id="input-price" name="price" class="form-control" placeholder="Rs 22000">
              </div>
            </div>
            <div class="col-lg-9">
              <div class="form-group">
                <label class="form-control-label" for="input-image">Images</label>
                <input type="file" name="image" class="form-control">
              </div>
            </div>
            <div class="col-lg-9">
              <div class="form-group">
                <label class="form-control-label" for="input-description">Description</label>
                <textarea rows="4" class="form-control" name="description" placeholder="A few words about products..."></textarea>
              </div>
            </div>
            <div class="col-4 text-right" style="margin-left: 50%;">
              <button type="submit" class="btn btn-primary">ADD</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  </body>

  @endsection