@extends('layouts.admin.master')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Levels Tab</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Class Management</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                              @include('flash::message')
                              @include('adminlte-templates::common.errors')
                                <div class="card-header">
                                    <h4 class="card-title">All Levels List  </h4>
                                    <a data-toggle="modal" data-target="#add-level-modal" class="btn btn-primary">
                                        <li class="la la-plus-circle"></li>  Add new Level
                                    </a>
                                </div>

                                <!-- table display -->
                                <div class="card-body">
                                    <div class="table-responsive" id="levels-table">
                                        <table class="display" id="example3" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Level</th>
                                                    <th>Subject Id</th>
                                                    <th>Level Description</th>
                                                    <th colspan="3">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($levels as $key => $level)
                                                <tr>
                                                    <td class="id">{{ ++$key }}</td>
                                                    <td>{{ $level->level }}</td>
                                                    <td>{{ $level->subject_id }}</td>
                                                    <td>{{ $level->level_description }}</td>
                                                    <td width="120">
                                                        {!! Form::open(['route' => ['admin.levels.destroy', $level->level_id], 'method' => 'delete']) !!}
                                                        <div class='btn-group'>
                                                            <a href="{{ route('admin.levels.edit', [$level->level_id]) }}"
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

                                    {{-- fields require --}}
                                    {!! Form::open(['route' => 'admin.levels.store']) !!}
                                        <!-- Modal -->
                                        <div class="modal fade" id="add-level-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                <!-- Level Field -->
                                                <div class="form-group col-sm-6">
                                                    {!! Form::label('level', 'Level:') !!}
                                                    {!! Form::text('level', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                                                </div>

                                                <!-- Subject Id Field -->
                                                <div class="form-group col-sm-6">
                                                    {!! Form::label('subject_id', 'Subject Id:') !!}
                                                    {!! Form::number('subject_id', null, ['class' => 'form-control']) !!}
                                                </div>

                                                <!-- Level Description Field -->
                                                <div class="form-group col-sm-12 col-lg-12">
                                                    {!! Form::label('level_description', 'Level Description:') !!}
                                                    {!! Form::textarea('level_description', null, ['class' => 'form-control']) !!}
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        {!! Form::submit('Save Level',['class' => 'btn btn-primary']) !!}
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--
@section('scripts')
    <script>
        $(#level-show).on('show.bs.modal', function(event){

            var button = $(event.relatedTarget)
            var level = button.data('level')
            var subject_id = button.data('subject_id')
            var level_description = button.data('level_description')
            var created_at = button.data('created_at')
            var updated_at = button.data('updated_at')
            var level_id = button.data('level_id')

            var modal = $(this)

            modal.find('.modal-title').text('VIEW LEVEL INFORMATION');
            modal.find('.modal-body').val(level);
            modal.find('.modal-body').val(subject_id);
            modal.find('.modal-body').val(level_description);
            modal.find('.modal-body').val(created_at);
            modal.find('.modal-body').val(updated_at);
            modal.find('.modal-body').val(level_id);

        })
    </script>
@endsection --}}