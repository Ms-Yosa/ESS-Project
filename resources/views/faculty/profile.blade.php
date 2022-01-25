@extends('layouts.faculty')
@section('content')
<section>
    <div class="container bootstrap snippets bootdey page-content">
        <div class="student-profile py-4">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-header text-center">
                                <img class="profile_img" src="https://placeimg.com/640/480/arch/any" alt="">
                                <h3>{{$faculty->faculty_name}}</h3>
                            </div>
                            <ul class="card-body">
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card shadow-sm">
                        <div class="card-header text-center">
                            <h3>General Information</h3>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table table-borderless">
                            <tr>
                                <th>Age</th>
                                <td>{{$faculty->age}}</td>
                            </tr>
                            <tr>
                                <th>Birthday</th>
                                <td>{{$faculty->birth_month}} {{$faculty->birth_day}},{{$faculty->birth_year}}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{$faculty->gender}}</td>
                            </tr>
                            <tr>
                                <th>Blood Type</th>
                                <td>{{$faculty->bloodtype}}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>{{$faculty->faculty_email}}</td>
                            </tr>
                            <tr>
                                <th>Contact Number</th>
                                <td>{{$faculty->contact_number}}</td>
                            </tr>
                            <tr>
                                <th>Residential Address</th>
                                <td></td>
                            </tr>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
</section>
@endsection