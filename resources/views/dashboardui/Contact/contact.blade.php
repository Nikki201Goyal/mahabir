@extends('dashboardui.master')
@section('content')
<div class="col-xl-8 order-xl-1" style="margin-left: 20%; margin-top: 2%;">
  <div class="card">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col-8">
          <h3 class="mb-0">contact Info </h3>
        </div>
        <div class="col-4 text-right">
          <a href="#!" class="btn btn-sm btn-primary">Settings</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <form >
        <ul class="list-group">
          <li class="list-group-item active">Messages</li>

          <table class="table">
            <thead>
              <tr>
              <th scope="col"> S.N.</th>
                <th scope="col"> Name</th>
                <th scope="col">Email</th>

              </tr>
            </thead>
            <tbody>
            @foreach($contact as $cont)
              <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$cont->name}}</td>
                <td>{{$cont->emailaddress}}</td>
                <td><a href="{{route('conInfo', $cont->id)}}" class="btn btn-primary">View More</a> </td>
             
                @endforeach
              </tr>

            </tbody>
          </table>
        </ul>

      </form>
    </div>
  </div>
</div>
@endsection