@extends('dashboardui.master')
@section('content')
<div class="col-xl-10 order-xl-1" style="margin-left: 10%; margin-top: 2%;">
  <div class="card">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col-12">
          <h3 class="mb-0">Jobs Applied </h3>
        </div>
  
      </div>
    </div>
    <div class="card-body">
      <form >
        <h6 class="heading-small text-muted mb-4">Application For Jobs</h6>
        <div class="pl-lg-2">

          <table class="table">
            <thead>
              <tr>
                <th scope="col">S.N</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Vacancy</th>
                <th scope="col">Country</th>
                <th scope="col">Phone</th>
                <th scope="col">Street</th>
                <th scope="col">Town</th>
                <th scope="col">Email Address</th>
              </tr>
            </thead>
            <tbody>
              @foreach($Apply as $register)
              <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$register->firstname}}</td>
                <td>{{$register->lastname}}</td>
                <td>{{$register->vacancy}}</td>
                <td>{{$register->country}}</td>
                <td>{{$register->phone}}</td>
                <td>{{$register->street}}</td>
                <td>{{$register->town}}</td>
                <td>{{$register->email}}</td>
              </tr>
         @endforeach
            </tbody>
          </table>
        </div>
        @endsection