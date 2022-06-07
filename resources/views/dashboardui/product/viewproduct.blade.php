@extends('dashboardui.master')
@section('content')
<div class="col-xl-8 order-xl-1" style="margin-left: 20%; margin-top: 2%;">
  <div class="card">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col-8">
          <h3 class="mb-0">Products </h3>
        </div>
        <div class="col-4 text-right">
          <a href="{{route('product.add')}}" class="btn btn-sm btn-primary">Add Products</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <form>
        <h6 class="heading-small text-muted mb-4">Products in Our showroom</h6>
        <div class="pl-lg-4">

          <table class="table">
            <thead>
              <tr>
                <th scope="col">S.N</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($items as $itm)
              <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$itm->name}}</td>
                <td>{{$itm->price}}</td>
                <td><img src="{{asset($itm->image)}}" alt="" width="100%"></td>
                <td>{{$itm->description}}</td>
                <td><a href="{{route('productEdit', $itm->id)}}" class="btn btn-primary">Edit</a> </td>
                <td><a href="{{route('productDelete', $itm->id)}}" class="btn btn-danger">Delete</a></td>
                @endforeach
              </tr>

            </tbody>
          </table>
       
        </div>
        @endsection