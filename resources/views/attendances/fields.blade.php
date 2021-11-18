<!-- Student Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_id', 'Student Id:') !!}
    {!! Form::number('student_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_id', 'Class Id:') !!}
    {!! Form::number('class_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Subj Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subj_id', 'Subj Id:') !!}
    {!! Form::number('subj_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Teacher Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('teacher_id', 'Teacher Id:') !!}
    {!! Form::number('teacher_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Attendance Status Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('attendance_status', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('attendance_status', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('attendance_status', 'Attendance Status', ['class' => 'form-check-label']) !!}
    </div>
</div>
