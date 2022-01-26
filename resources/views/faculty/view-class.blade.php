@extends('layouts.faculty')
@section('content')
<section>
    <div class="container mt-5 mb-5">
        <div class="container mt-5">
            @foreach ($class as $key => $student)
            <h3>Class: <strong>{{$student->class_name}}</strong> - Student List</h3>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Birthday</th>
                    <th>Gender</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($student->getStudents as $list)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td class="name">{{ $list->surname }}, {{ $list->name }} {{ $list->middle_name }}</td>
                            <td class="email">{{ $list->email }}</td>
                            <td class="age">{{ $list->age }}</td>
                            <td class="age">{{ $list->birth_year }}, {{ $list->birth_month }} {{ $list->birth_day }}</td>
                            <td class="gender">{{ $list->gender }}</td>
                        </tr>
                      @endforeach
                <tbody>
            </table>
            @endforeach

            @foreach ($class as $key => $student)
            <h3>Subject List</h3>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Area</th>
                    <th>Subjects</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($student->getSubArea as $subArea)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $subArea->name }}</td>
                            <td>
                                @foreach ($subArea->subjects as $sub)
                                    {{$sub->subject_name}}
                                <br>
                                @endforeach
                            </td>
                            <td>
                                <a  href="{{route('faculty.marking',['id'=>$student->class_id,'subArea_id'=>$subArea->id])}}">Mark Students</a>
                            </td>

                        </tr>
                    @endforeach
                <tbody>
            </table>
            @endforeach
        </div>
    </div>

</section>
@endsection