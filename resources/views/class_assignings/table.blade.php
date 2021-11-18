<div class="table-responsive">
    <table class="table" id="classAssignings-table">
        <thead>
        <tr>
            <th>Subject Id</th>
        <th>Level Id</th>
        <th>Classroom Id</th>
        <th>Day Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($classAssignings as $classAssigning)
            <tr>
                <td>{{ $classAssigning->subject_id }}</td>
            <td>{{ $classAssigning->level_id }}</td>
            <td>{{ $classAssigning->classroom_id }}</td>
            <td>{{ $classAssigning->day_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['classAssignings.destroy', $classAssigning->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classAssignings.show', [$classAssigning->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('classAssignings.edit', [$classAssigning->id]) }}"
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
