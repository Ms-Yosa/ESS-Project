@extends('layouts.faculty')
@section('content')
<section>
    <div class="container mt-5 mb-5">
        <div class="container mt-5">
            @foreach ($class as $key => $student)
                @foreach ($subject as $subArea)
                    <h3>Encode Grade for Subject Area: {{ $subArea->name}}</h3>
                @endforeach
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($student->getStudents as $list)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $list->surname }}, {{ $list->name }} {{ $list->middle_name }}</td>
                                <td>
                                    <a  href="{{route('faculty.grade',['subArea_id'=>$subArea->id,'student_id'=>$list->id])}}">Mark</a>
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