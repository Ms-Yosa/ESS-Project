@extends('layouts.student')
@section('content')
<div class="container bootstrap snippets bootdey page-content">
<div class="student-profile py-4">
        <div class="container">
            <div class="row">
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-header text-center">
                        <img class="profile_img" src="https://placeimg.com/640/480/arch/any" alt="">
                        <h3>{{ Auth::guard('web')->user()->name }}</h3>
                    </div>
                    <ul class="card-body">
                        <li class="mb-0"><strong class="pr-1">Student Number:</strong>123456789</li>
                        <li class="mb-0"><strong class="pr-1">Section:</strong></li>
                        <li class="mb-0">
                            <strong class="pr-1">Class:
                                @foreach ($class as $cla)
                                    <option value="{{$cla -> class_id}}">{{ $cla -> class_name}}</option>
                                @endforeach
                            </strong>
                        </li>
                        <li class="mb-0"><strong class="pr-1">Current Period:</strong></li>
                        <li class="mb-0"><strong class="pr-1">Adviser:</strong></li>
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
                        <td>{{ Auth::guard('web')->user()->age }}</td>
                    </tr>
                    <tr>
                        <th>Birthday</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>{{ Auth::guard('web')->user()->gender }}</td>
                    </tr>
                    <tr>
                        <th>Religion</th>
                        <td>{{ Auth::guard('web')->user()->religion }}</td>
                    </tr>
                    <tr>
                        <th>Blood Type</th>
                        <td>{{ Auth::guard('web')->user()->student_bloodtype }}</td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td>{{ Auth::guard('web')->user()->email }}</td>
                    </tr>
                    <tr>
                        <th>Guardian's Name</th>
                        <td>{{ Auth::guard('web')->user()->guardian }}</td>
                    </tr>
                    <tr>
                        <th>Guardian Contact Number</th>
                        <td>{{ Auth::guard('web')->user()->contact_number }}</td>
                    </tr>
                    <tr>
                        <th>Relation to Student</th>
                        <td>{{ Auth::guard('web')->user()->relation }}</td>
                    </tr>
                    <tr>
                        <th>Residential Address</th>
                        <td><{{ Auth::guard('web')->user()->address }}/td>
                    </tr>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection