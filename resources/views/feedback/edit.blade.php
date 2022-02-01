@extends('layouts.faculty')
@section('content')
<section>
    <div class="container mt-3 mb-3">
        <form action="{{route('faculty.feedback.update', ['user_id'=>$feedback->user_id,'id'=>$feedback->id])}}"  method="POST" autocomplete="off">
            @method('PUT')
            @csrf
            <div class="row">
                <label for="week">Week No.</label>
                <input type="text" class="form-group col-sm-6" name="week" value="{{$feedback->week}}">
            </div>
            <div class="row">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="40" rows="2" v>
                    {{$feedback->description}}
                </textarea>
            </div>
            <div class="row mt-3">
                <button type="submit" class="btn btn-primary">Update Feedback</button>
                  <button class="btn btn-light"><a href="" >Cancel</a></button>
            </div>
        </form>
    </div>
</section>
@endsection