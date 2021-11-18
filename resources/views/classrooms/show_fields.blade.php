<!-- Classroom Name Field -->
<div class="col-sm-12">
    {!! Form::label('classroom_name', 'Classroom Name:') !!}
    <p>{{ $classroom->classroom_name }}</p>
</div>

<!-- Classroom Code Field -->
<div class="col-sm-12">
    {!! Form::label('classroom_code', 'Classroom Code:') !!}
    <p>{{ $classroom->classroom_code }}</p>
</div>

<!-- Classroom Description Field -->
<div class="col-sm-12">
    {!! Form::label('classroom_description', 'Classroom Description:') !!}
    <p>{{ $classroom->classroom_description }}</p>
</div>

<!-- Classroom Status Field -->
<div class="col-sm-12">
    {!! Form::label('classroom_status', 'Classroom Status:') !!}
    <p>{{ $classroom->classroom_status }}</p>
</div>

