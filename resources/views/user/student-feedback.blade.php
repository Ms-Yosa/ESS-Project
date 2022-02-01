@extends('layouts.student')
@section('content')
    <section>
    <div class="container container-md grades-content">
        <div class="row grades-student-info">
            <div class="col">
                @include('partials.user.user-gen-info')
                <br><br>
                <!-- Attendance Report Table -->
            </div>
            <div class="col">
                <!-- second column -->
                <table class="table table-borderless text-center">
                    <thead class="border border-warning border border-2" style="margin-bottom:5em;">
                        <tr>
                            <th scope="col" colspan="6" class="text-center">WEEKLY FEEDBACK REPORT</th>
                        </tr>
                    </thead>
                    <tr  style="text-align: center;">
                        <th>#</th>
                        <th scope="col">Week #</th>
                        <th scope="col">Description</th>
                    </tr>
                    <tbody>
                        @foreach ($feedback as $key => $fb)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$fb->week}}</td>
                            <td>{{$fb->description}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </section>
    @endsection