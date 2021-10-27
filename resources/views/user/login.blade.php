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
            <div class="w3-display-middle main">
                <div class="greeting-icon-box">
                    <h3 class="greetings">Greetings! Students</h3>
                    <div class="icons">
                        <img src="/assets/studentFemale.png" alt="Female Faculty" class="icons female">
                        <img src="/assets/studentMale.png" alt="Male Faculty" class="icons male">
                    </div>
                    <div class="credits">Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>

                </div>
                <div class="form-box">
                   <a href="{{ url('/') }}"><img class="logo amsai" src="/assets/Logo.png" alt="AMSAI Logo" ></a> 
                    <div class="header">
                        <label  class="name school">
                            AMSAI LEARNING SCHOOL
                        </label>
                        <br>
                        <label class="name system">
                            STUDENT INFORMATION SYSTEM
                        </label>   
                    </div>
                    
                    <form action="{{ route('user.check')}} " class="form" method="post" autocomplete="off"> 

                        <!-- DISPLAY STATUS -->

                        @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                        @csrf
                        <label for="email" class="label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" placeholder="Enter Email Address" class="input form-control" name="email" value="" >                            
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>

                        <label for="password" class="label">{{ __('Password') }}</label>
                        <input id="password" type="password" placeholder="Password" class="input form-control " name="password" >
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>

                        <input class="remember" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="remember" for="remember">{{ __('Remember Me') }}</label>

                        <button type="submit" class="btn">{{ __('Login') }}</button>
                        @if (Route::has('password.request'))
                                    <a class="forgot" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    </form >
                </div>
            </div>
        </div>
    
    </body>
</html>