@extends('dashboardui.master')
@section('content')
<div class="col-xl-8 order-xl-1" style="margin-left: 20%; margin-top: 2%;">
  <div class="card">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col-8">
          <h3 class="mb-0">Edit Job </h3>
        </div>

      </div>
    </div>
    <div class="card-body">
      <form action="{{route('jobUpdate',$work->id)}}">
        @csrf
        <h6 class="heading-small text-muted mb-4">Job Description</h6>
        <div class="pl-lg-4">

          <div class="col-lg-9">
            <div class="form-group">
              <label class="form-control-label" for="input-username">Position Name</label>
              <input type="text" name="name" value="{{$work->name}}" id="input-username" class="form-control">
            </div>
          </div>
          <div class="col-lg-9">
            <div class="form-group">
              <label class="form-control-label" for="input-description">Description</label>
              <input rows="4" name="description" value="{{$work->description}}" class="form-control"></input>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="form-group">
              <label class="form-control-label" for="input-responsibilities">Responsibilities</label>
              <input rows="4" name="responsibilities" value="{{$work->responsibilities}}" class="form-control"></input>
            </div>
          </div>

          <div class="col-4 text-right" style="margin-left: 50%;">
            <button type="submit" class="btn btn-primary">EDIT</button>
          </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection