@extends('dashboardui.master')
@section('content')
<div class="col-xl-8 order-xl-1" style="margin-left: 20%; margin-top: 2%;">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Jobs  </h3>
                </div>
                <div class="col-4 text-right">
                  <a href="{{route('Jobs')}}" class="btn btn-sm btn-primary">Add Jobs</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Jobs Title</h6>
                <div class="pl-lg-4">
    
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Position Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Responsibilities</th>
                        <th scope="col">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($works as $work)
                      <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$work->name}}</td>
                        <td>{{$work->description}}</td>
                        <td>{{$work->responsibilities}}</td>
                        <td><a href="{{route('jobEdit', $work->id)}}" class="btn btn-primary">Edit</a> </td>
                        <td ><a href="{{route('jobDelete', $work->id)}}" class="btn btn-danger">Delete</a></td>
                     
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                      </div>
                    @endsection