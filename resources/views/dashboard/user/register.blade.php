<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>User Login</title>

        <!-- Style -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
        <link href="{{ asset('css/session.css') }}" rel="stylesheet">

    </head>
    <body>

        <div class="container">
            <div >
                <div class="form-box">
                   <a href="{{ route('admin.home') }}"><img class="logo amsai" src="/assets/Logo.png" alt="AMSAI Logo" ></a> 
                    <div class="header">
                        <label  class="name school">
                            AMSAI LEARNING SCHOOL
                        </label>
                        <br>
                        <label class="name system">
                            STUDENT INFORMATION SYSTEM
                        </label>   
                    </div>
                    
                    <form action="{{ route('user.create')}}" method="post" autocomplete="off">
                    @if (Session::get('success'))
                         <div class="alert alert-success">
                             {{ Session::get('success') }}
                         </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    @csrf
                      <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name') }}">
                          <span class="text-danger">@error('name'){{ $message }} @enderror</span><br>
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span><br>
                    </div>
                      <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                          <span class="text-danger">@error('password'){{ $message }} @enderror</span><br>
                      </div>
                      <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm-password" placeholder="Enter confirm password" value="{{ old('confirm-password') }}">
                        <span class="text-danger">@error('confirm password'){{ $message }} @enderror</span>
                    </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary">Register</button>
                      </div>
                      

                  </form>
                </div>
            </div>
        </div>
    
    </body>
</html>