<div class="table-responsive">
    <table class="table" id="classSchedulings-table">
        <thead>
        <tr>
            <th>Subject Id</th>
        <th>Level Id</th>
        <th>Classroom Id</th>
        <th>Day Id</th>
        <th>Teacher Id</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($classSchedulings as $classScheduling)
            <tr>
                <td>{{ $classScheduling->subject_id }}</td>
            <td>{{ $classScheduling->level_id }}</td>
            <td>{{ $classScheduling->classroom_id }}</td>
            <td>{{ $classScheduling->day_id }}</td>
            <td>{{ $classScheduling->teacher_id }}</td>
            <td>{{ $classScheduling->start_time }}</td>
            <td>{{ $classScheduling->end_time }}</td>
            <td>{{ $classScheduling->status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['classSchedulings.destroy', $classScheduling->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classSchedulings.show', [$classScheduling->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('classSchedulings.edit', [$classScheduling->id]) }}"
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
