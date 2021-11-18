@extends('layouts.student')
@section('content')
    <section>
    <div class="container container-md grades-content">
        <div class="row grades-student-info">
            <div class="col">
                @include('partials.user.user-gen-info')
                <br><br>
                <!-- Attendance Report Table -->
                <table class="table text-center grades-progress-achievement table-borderless " style="border:2px solid #FFC415; background-color:#FDF8DB; border-color:#FC6300">
                    <thead class="border border-warning border border-2 "><th colspan="3">Teacher's Feedback</th>  </thead>
                    <tr style="border-top: 0px; border-left: 0px;border-right: 0px">
                            <th scope="col">Subject Matter</th>
                            <th scope="col">Date</th>
                            <th scope="col">Discussion</th>
                    </tr>
                    <tbody>
                        <tr style="height: 200px;border: 2px solid #FC6300">
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-grid gap-2 col-6 mx-auto ">
                <button class="btn msg-trigger" href="#" type="button">Consultation <i class="fa fa-comment" aria-hidden="true"></i></button>
                    <br>
                </div>
            </div>
            <div class="col">
                <!-- second column -->
                <table class="table table-borderless text-center">
                    <thead class="border border-warning border border-2" style="margin-bottom:5em;">
                        <tr>
                            <th scope="col" colspan="6" class="text-center">WEEKLY BEHAVIOR REPORT</th>
                        </tr>
                    </thead>
                    <tr  style="text-align: left;">
                        <th scope="col">Week #</th>
                        <th scope="col">Report</th>
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
                <!-- Modal -->
                <div class="modal-wrapper">
                    <div class="modal">
                        <div class="head">
                        <a class="btn-close trigger" href="#">
                        </a>
                        </div>
                        <div class="content">
                            <div class="view-awards page-leaderboard">
                            <section class="leaderboard-progress">
                                <div class="contain text-center">
                                    <img class="mb-2 modal-image" src="{{ URL::asset('/Assets/icons/behavior.png') }}">
                                    <h2>Behavior Report Summary</h2>
                                    <p class="lead">Lorem Ipsum</p>
                                </div>
                            </section>

                            <section class="ranking">
                                <div class="contain behavior-modal">
                                    <!--for demo wrap-->
                                    <h1>Fixed Table header</h1>
                                    <div class="tbl-header">
                                        <table cellpadding="0" cellspacing="0" border="0">
                                        <thead>
                                            <tr>
                                            <th >Week</th>
                                            <th>Report</th>
                                            </tr>
                                        </thead>
                                        </table>
                                    </div>
                                    <div class="tbl-content">
                                        <table cellpadding="0" cellspacing="0" border="0 table-hover">
                                        <tbody>
                                            <tr>
                                            <td>Week 1</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                            </tr>
                                            <tr>
                                            <td>Week 2</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </section>
    @endsection