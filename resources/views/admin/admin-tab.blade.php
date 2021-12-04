@extends('layouts.admin.master')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Faculties Tab</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Admins</a></li>
                        
                    </ol>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Admin List  </h4>
                                    <a href="{{ route('admin.admin-register') }}" class="btn btn-primary"><li class=
"la la-user-plus"></li>  Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Age</th>
                                                    <th>Birthday</th>
                                                    <th>Gender</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($admins as $key => $admin)
                                                  <tr>
                                                      <td class="id">{{ ++$key }}</td>
                                                      <td class="name">{{ $admin->surname }}, {{ $admin->name }} {{ $admin->middle_name }}</td>
                                                      <td class="email">{{ $admin->email }}</td>
                                                      <td class="age">{{ $admin->age }}</td>
                                                      <td class="age">{{ $admin->birth_year }}, {{ $admin->birth_month }} {{ $admin->birth_day }}</td>
                                                      <td class="gender">{{ $admin->gender }}</td>
                                                      <td>
                                                          <div class="row">
                                                                <button class="badge bg-primary" data-toggle="modal" data-target="#ModalView{{$admin->id}}"><i class="la la-eye"></i></button> 
                                                                
                                                                    
                                                                <form action="{{ route('admin.admin-edit', $admin->id)}}" method="GET">  
                                                                    @csrf  
                                                                    
                                                                    <button class="badge bg-success" type="submit"><i class="la la-pencil-square"></i></button>  
                                                                </form>  
            
                                                                
                                                                <form action="{{ route('admin.admin-destroy', $admin->id)}}" method="POST">
                                                                    @method('DELETE')
                                                                    @csrf  
                                                               
                                                                <button class="badge bg-danger" type="submit"> <a  onclick="return confirm('Are you sure to want to delete it?')"><i class="la la-trash"></i></a></button>  
                                                           </form>  
                                                          </div>
                                                      </td>
                                                      @include('admin.admin-management.view-modal')
                                                  </tr>
                                              @endforeach
                                            <tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection