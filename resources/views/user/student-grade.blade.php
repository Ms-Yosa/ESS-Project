@extends('layouts.student')
@section('content')
    <section>
    <div class="container container-md grades-content">
        <div class="row grades-student-info">
            <div class="col">
                @include('partials.user.user-gen-info')
                <br><br>
                <!-- Learner Progress and Achievements Table -->
                <table class="table text-center grades-progress-achievement table-borderless" style="border:2px solid #FFC415; background-color:#FDF8DB; border-color:#FC6300">
                    <thead class="border border-warning border border-2 "><th colspan="3">Academic Metrics</th>  </thead>
                    <tbody>
                        <tr>
                            <th scope="col">Descriptors</th>
                            <th scope="col">Grading Sytem</th>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>Superior</td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td>Above Average</td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td>Average</td>
                        </tr>
                        <tr>
                            <td>D</td>
                            <td>Below Average</td>
                        </tr>
                        <tr>
                            <td>E</td>
                            <td>Poor</td>
                        </tr>
                        <tr>
                            <td>F</td>
                            <td>Failure</td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-grid gap-2 col-6 mx-auto ">
                    <button class="btn trigger" href="#" type="button">View Awards <i class="fa fa-star" aria-hidden="true"></i></button>
                    <br><br>

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
                                    <img class="mb-2 modal-image" src="{{ URL::asset('/Assets/icons/trophy.png') }}">
                                    <h2>Awards Summary</h2>
                                    <p class="lead">Lorem Ipsum</p>
                                </div>
                            </section>

                            <section class="ranking">
                                <div class="contain">
                                    <div class="ranking-table">
                                        <div class="ranking-table-header-row">
                                            <div class="ranking-table-header-data h6"></div>
                                            <div class="ranking-table-header-data h6">Award</div>
                                            <div class="ranking-table-header-data h6">Period</div>
                                        </div>
                                        <div class="ranking-table-row-leader-1">
                                            <div class="ranking-table-data-leader-1">
                                                <div class="medal-gold"></div>
                                            </div>
                                            <div class="ranking-table-data">
                                                Super Reader
                                            </div>
                                            <div class="ranking-table-data">
                                                <div>1st Period</div>
                                            </div>
                                        </div>
                                        <div class="ranking-table-row-leader-1">
                                            <div class="ranking-table-data-leader-1">
                                                <div class="medal-gold"></div>
                                            </div>
                                            <div class="ranking-table-data">
                                                Bookworm
                                            </div>
                                            <div class="ranking-table-data">
                                                <div>1st Period</div>
                                            </div>
                                        </div>
                                        <div class="ranking-table-row-leader-1">
                                            <div class="ranking-table-data-leader-1">
                                                <div class="medal-gold"></div>
                                            </div>
                                            <div class="ranking-table-data">
                                                Friendship Award
                                            </div>
                                            <div class="ranking-table-data">
                                                <div>1st Period</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            </div>
                        </div>
                    </div>
                    </div>
                    <br>
                </div>
            </div>
            <div class="col">
                <!-- second column -->
                <table class="table table-borderless text-center grades-student-grades">
                    <thead class="border border-warning border border-2 ">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" >Skills</th>
                            <th scope="col" colspan="4" class="text-center">REPORT PERIOD</th>
                        </tr>
                    </thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">1st</th>
                        <th scope="col">2nd</th>
                        <th scope="col">3rd</th>
                        <th scope="col">4th</th>
                    </tr>
                    <tbody>
                        <tr style="border-top: 2px solid #FC6300">
                            <td scope="row">1</td>
                            <td>Writing</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Listening</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>Reading</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr>
                            <td scope="row">4</td>
                            <td>Mathematics</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr style="border-bottom: 2px solid #FC6300">
                            <td scope="row">8</td>
                            <td>Arts & Crafts</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr >
                            <td scope="col"></td>
                            <td scope="col">Average</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </section>
    @endsection