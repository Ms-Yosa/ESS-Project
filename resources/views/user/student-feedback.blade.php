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
                    <tr  style="text-align: left;">
                        <th scope="col">Week #</th>
                        <th scope="col">Description</th>
                    </tr>
                    <tbody>
                        <tr style="border-top:2px solid #FC6300;border-bottom:2px solid #FC6300;  ">
                            <td scope="col" colspan="2" style="height:415px;"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-grid gap-2 col-6 mx-auto ">
                    <button class="btn trigger" href="#" type="button">View All Report <i class="fa fa-search" aria-hidden="true"></i></button>
                    <br>
                </div>

            </div>
        </div>
    </div>
    </section>
    @endsection