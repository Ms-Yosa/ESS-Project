<!-- Class Name Field -->
<div class="form-group col-sm-6">
    <h6><label for="class_name">Class Name:</label></h6>
    <input type="text" class="form-control form-control-sm" name="class_name" placeholder="Class Name">
</div>

<!-- Class Code Field -->
<div class="form-group col-sm-6">
    <h6><label for="class_code">Class Name:</label></h6>
    <input type="text" class="form-control form-control-sm" name="class_code" placeholder="Class Code">
</div>

<!-- Class Level Field -->
<div class="form-group col-sm-6">
    {{-- {!! Form::label('class_code', 'Level:') !!}
    {!! Form::text('level', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!} --}}
    <h6><label for="level">Level:</label></h6>
    <select class="form-group" name="level" id="level">
        <option value="">Select Level</option>
        <option value="Kindergarten">Kindergarten</option>
        <option value="Nursery">Nursery</option>
    </select>
</div>

<!-- Faculty Id Field -->
<div class="form-group col-sm-6">
    {{-- {!! Form::label('subject_id', 'Subject Id:') !!}
    {!! Form::number('subject_id', null, ['class' => 'form-control']) !!} --}}
    <select class="form-group" name="faculty_id" id="faculty_id">
        <option value="">Select Instructor</option>
        @foreach ($faculty as $fac)
            <option value="{{$fac -> id}}">{{ $fac -> faculty_name}}</option>
        @endforeach
    </select>
</div>

<!-- Subject Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('subject_id', 'Subject Id:') !!}
    {!! Form::number('subject_id', null, ['class' => 'form-control']) !!}
    <select class="form-group" name="subject_id" id="subject_id">
        <option value="">Select Subject</option>
        @foreach ($subject as $subj)
            <option value="{{$subj -> subject_id}}">{{ $subj -> subject_name}}</option>
        @endforeach
    </select>
</div> --}}

<!-- Day Id Field -->
<div class="form-group col-sm-6">
    {{-- {!! Form::label('day_id', 'Day Id:') !!}
    {!! Form::number('day_id', null, ['class' => 'form-control']) !!} --}}
    <select class="form-group" name="day_id" id="day_id">
        <option value="">Select Day</option>
        <option value="1">Monday</option>
        <option value="2">Tuesday</option>
        <option value="3">Wednesday</option>
        <option value="4">Thursday</option>
        <option value="5">Friday</option>
    </select>
</div>

<!-- Start Time Field -->
<div class="form-group col-sm-6">
    {{-- {!! Form::label('start_time', 'Start Time:') !!}
    {!! Form::number('start_time', null, ['class' => 'form-control']) !!} --}}
    <select class="form-group" name="start_time" id="start_time">
        <option value="">Select Start Time</option>
        <option value="7:00AM">7:00AM</option>
        <option value="7:30AM">7:30AM</option>
        <option value="8:00AM">8:00AM</option>
        <option value="8:30AM">8:30AM</option>
        <option value="9:00AM">9:00AM</option>
        <option value="9:30AM">9:30AM</option>
        <option value="10:00AM">10:00AM</option>
        <option value="10:30AM">10:30AM</option>
        <option value="11:00AM">11:00AM</option>
        <option value="11:30AM">11:30AM</option>
        <option value="12:00PM">12:00PM</option>
        <option value="12:30PM">12:30PM</option>
        <option value="1:00PM">1:00PM</option>
        <option value="1:30PM">1:30PM</option>
        <option value="2:00PM">2:00PM</option>
        <option value="2:30PM">2:30PM</option>
        <option value="3:00PM">3:00PM</option>
        <option value="3:30PM">3:30PM</option>
        <option value="4:00PM">4:00PM</option>
        <option value="4:30PM">4:30PM</option>
        <option value="5:00PM">5:00PM</option>
        <option value="5:30PM">5:30PM</option>
        <option value="6:00PM">6:00PM</option>
    </select>
</div>

<!-- End Time Field -->
<div class="form-group col-sm-6">
    {{-- {!! Form::label('end_time', 'End Time:') !!}
    {!! Form::number('end_time', null, ['class' => 'form-control']) !!} --}}
    <select class="form-group" name="end_time" id="end_time">
        <option value="">Select End Time</option>
        <option value="7:00AM">7:00AM</option>
        <option value="7:30AM">7:30AM</option>
        <option value="8:00AM">8:00AM</option>
        <option value="8:30AM">8:30AM</option>
        <option value="9:00AM">9:00AM</option>
        <option value="9:30AM">9:30AM</option>
        <option value="10:00AM">10:00AM</option>
        <option value="10:30AM">10:30AM</option>
        <option value="11:00AM">11:00AM</option>
        <option value="11:30AM">11:30AM</option>
        <option value="12:00PM">12:00PM</option>
        <option value="12:30PM">12:30PM</option>
        <option value="1:00PM">1:00PM</option>
        <option value="1:30PM">1:30PM</option>
        <option value="2:00PM">2:00PM</option>
        <option value="2:30PM">2:30PM</option>
        <option value="3:00PM">3:00PM</option>
        <option value="3:30PM">3:30PM</option>
        <option value="4:00PM">4:00PM</option>
        <option value="4:30PM">4:30PM</option>
        <option value="5:00PM">5:00PM</option>
        <option value="5:30PM">5:30PM</option>
        <option value="6:00PM">6:00PM</option>
    </select>
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('status', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('status', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('status', 'Status', ['class' => 'form-check-label']) !!}
    </div>
</div>