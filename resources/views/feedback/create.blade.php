@extends('layouts.faculty')
@section('content')
<section>
    <div class="container">
        <label for="week">Week No.</label>
        <input type="text" class="form-control form-control-sm" name="week">

        <label for="description">Description</label>
        <textarea name="description" id="description" cols="40" rows="2">
        </textarea>
    </div>
</section>
@endsection