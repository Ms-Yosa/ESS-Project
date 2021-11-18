<div class="table-responsive">
    <table class="table" id="attendances-table">
        <thead>
        <tr>
            <th>Student Id</th>
        <th>Class Id</th>
        <th>Subj Id</th>
        <th>Teacher Id</th>
        <th>Attendance Status</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($attendances as $attendance)
            <tr>
                <td>{{ $attendance->student_id }}</td>
            <td>{{ $attendance->class_id }}</td>
            <td>{{ $attendance->subj_id }}</td>
            <td>{{ $attendance->teacher_id }}</td>
            <td>{{ $attendance->attendance_status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['attendances.destroy', $attendance->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('attendances.show', [$attendance->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('attendances.edit', [$attendance->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
