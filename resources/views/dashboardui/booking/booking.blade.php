@extends('dashboardui.master')
@section('content')
<div class="col-xl-12 order-xl-1" style="margin-left: 3%; margin-top: 2%;">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-12">
                    <h3 class="mb-0">Booking Details</h3>
                </div>

            </div>
        </div>
        <div class="card-body">
            <form>
                <h6 class="heading-small text-muted mb-4">Order Placed</h6>
                <div class="pl-lg-3">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Item</th>
                                <th scope="col">Country</th>
                                <th scope="col">Street</th>
                                <th scope="col">Post code</th>
                                <th scope="col">Town</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email Address</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($booking as $book)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$book->firstname}}</td>
                                <td >{{$book->lastname}}</td>
                                <td >{{$book->item}}</td>
                                <td >{{$book->country}}</td>
                                <td >{{$book->street}}</td>
                                <td >{{$book->postcode}}</td>
                                <td >{{$book->town}}</td>
                                <td >{{$book->phone}}</td>
                                <td >{{$book->email}}</td>
                            </tr>
                   
                            @endforeach

                        </tbody>
                    </table>
                </div>
                @endsection