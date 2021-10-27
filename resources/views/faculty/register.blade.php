<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register</title>

        <!-- Style -->
       <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
        <link href="{{ asset('css/session.css') }}" rel="stylesheet">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
        <!-- BOOTSTRAP -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
        <!-- FONT-AWESOME -->
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

        <!-- FOOTER -->
        <link rel="stylesheet" href="{{ URL::asset('css/partials/footer.css') }}" />

    </head>
    <body>

    <nav class="navbar navbar-light" style="background-color:#FBD848" >
        @include('partials.admin.navbar')
    </nav>

    <section>
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
                    
                    <form action="{{ route('faculty.create')}}" method="post" autocomplete="off">
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
                        <span class="text-danger">@error('confirm-password'){{ $message }} @enderror</span>
                    </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary">Register</button>
                      </div>
                      

                  </form>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        @include('partials.admin.footer')
    </footer>
    
    </body>
</html>