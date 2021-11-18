@extends('layouts.student')
@section('content')

    <section>
    <div class="container container-md grades-content">
        <div class="row grades-student-info">
            <div class="col">
                @include('partials.user.user-gen-info')
                <br><br>
                <!-- Attendance Report Table -->
                <table class="table text-center grades-progress-achievement table-borderless" style="border:2px solid #FFC415; background-color:#FDF8DB; border-color:#FC6300">
                    <thead class="border border-warning border border-2 "><th colspan="3">Attendance Report Table</th>  </thead>
                    <tbody>
                        <tr style="height: 200px; border: 2px solid #FC6300"></tr>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <!-- second column -->
                <table class="table table-borderless text-center schedule-student">
                    <thead class="border border-warning border border-2 ">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" >Day</th>
                            <th scope="col" colspan="6" class="text-center">TIME</th>
                        </tr>
                    </thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    <tbody>
                        <tr style="border-top: 2px solid #FC6300">
                            <td scope="row">1</td>
                            <td>Monday</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td sctdcol">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Tuesday</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>Wednesday</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr>
                            <td scope="row">4</td>
                            <td>Thursday</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr style="border-bottom: 2px solid #FC6300">
                            <td scope="row">5</td>
                            <td>Friday</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
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