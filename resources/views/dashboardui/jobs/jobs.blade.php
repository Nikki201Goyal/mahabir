@extends('dashboardui.master')
@section('content')
<div class="col-xl-8 order-xl-1" style="margin-left: 20%; margin-top: 2%;">
  <div class="card">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col-8">
          <h3 class="mb-0">Add Job </h3>
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
      <form action="{{route('jobStore')}}">
        <h6 class="heading-small text-muted mb-4">Job Description</h6>
        <div class="pl-lg-4">

          <div class="col-lg-9">
            <div class="form-group">
              <label class="form-control-label" for="input-username">Position Name</label>
              <input type="text" name="name" class="form-control" placeholder=" Product name">
            </div>
          </div>
        
            <div class="col-lg-9">
              <div class="form-group">
                <label>Description</label>
                <textarea name="description" rows="5" cols="40" class="form-control tinymce-editor"></textarea>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="form-group">
                <label class="form-control-label" for="input-responsibilities">Responsibilities</label>
                <textarea rows="4" class="form-control" name="responsibilities" placeholder="A few words about products..."></textarea>
              </div>
            </div>
             <div class="col-4 text-right" style="margin-left: 50%;">
                <button type="submit" class="btn btn-primary">ADD</button>
              </div>

            </div>
          </div>
      </form>

    </div>
  </div>
</div>
</div>
</body>

@endsection