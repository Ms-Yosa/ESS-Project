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
        <div class="container">
            <div >
                <div class="form-box">
                   <a href="{{ route('admin.admin-tab') }}"><img class="logo amsai" src="/assets/Logo.png" alt="AMSAI Logo" ></a> 
                    <div class="header">
                        <label  class="name school">
                            AMSAI LEARNING SCHOOL
                        </label>
                        <br>
                        <label class="name system">
                            STUDENT INFORMATION SYSTEM
                        </label>   
                    </div>
                    
                    <form action="{{ route('user.update', $user->id)}}" method="POST" autocomplete="off">
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
                    @method('PUT')


                      <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ $user->name}}">
                          <span class="text-danger">@error('name'){{ $message }} @enderror</span><br>
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ $user->email }}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span><br>
                    </div>
                      <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ $user->password }}">
                          <span class="text-danger">@error('password'){{ $message }} @enderror</span><br>
                      </div>

                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm-password" placeholder="Enter confirm password" value="{{ old('confirm-password') }}">
                        <span class="text-danger">@error('confirm-password'){{ $message }} @enderror</span>
                    </div>
                
                <!-- ADDITIONAL INFO  -->

                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" class="form-control" name="age" min="1" value="{{ $user->age }}">
                        <span class="text-danger">@error(''){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="birthday">Birthday</label>
                        <input type="date" class="form-control" name="birtday" >
                        <!-- <span class="text-danger">@error('confirm-password'){{ $message }} @enderror</span> -->
                    </div>


                    <div class="form-group ">
                        <p>Gender</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                        <!-- <span class="text-danger">@error('confirm-password'){{ $message }} @enderror</span> -->
                    </div>

                    <div class="form-group">
                        <label for="religion">Religion</label>
                        <input type="text" class="form-control" name="religion" >
                        <!-- <span class="text-danger">@error('confirm-password'){{ $message }} @enderror</span> -->
                    </div>

                    <div class="form-group">
                        <label for="bloodtype">Bloodtype</label>
                        <select name="bloodtype" class="form-select" aria-label="Default select example">
                            <option selected disabled>Open this select menu</option>
                            <option value="A+">A+</option>
                            <option value="O+">O+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="O-">O-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                            <option value="Unknown">Unknown</option>
                        </select>
                        <!-- <span class="text-danger">@error('confirm-password'){{ $message }} @enderror</span> -->
                    </div>

                    <div class="form-group">
                          <label for="guardian-name">Guardian's Name</label>
                          <input type="text" class="form-control" name="guardian-name" placeholder="Enter full name" >
                          <!-- <span class="text-danger">@error('name'){{ $message }} @enderror</span><br> -->
                    </div>

                    <div class="form-group">
                          <label for="guardian-number">Guardian's Contact Number</label>
                          <input type="tel" class="form-control" name="guardian-number" placeholder="09XXXXXXXXX" pattern=[0-9]{11}>
                          <!-- <span class="text-danger">@error('name'){{ $message }} @enderror</span><br> -->
                    </div>

                    <div class="form-group">
                          <label for="relation">Relation to student</label>
                          <input type="text" class="form-control" name="relation" placeholder="Enter your relation" >
                          <!-- <span class="text-danger">@error('name'){{ $message }} @enderror</span><br> -->
                    </div>

                    <div class="form-group">
                        <label for="bloodtype">Bloodtype</label>
                        <select name="bloodtype" class="form-select" aria-label="Default select example">
                            <option selected disabled>Open this select menu</option>
                            <option value="A+">A+</option>
                            <option value="O+">O+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="O-">O-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                            <option value="Unknown">Unknown</option>
                        </select>
                        <!-- <span class="text-danger">@error('confirm-password'){{ $message }} @enderror</span> -->
                    </div>

                    <div class="form-group">
                          <label for="address">Residential Address</label>
                          <input type="text" class="form-control" name="address" placeholder="Enter your complete current address" >
                          <!-- <span class="text-danger">@error('name'){{ $message }} @enderror</span><br> -->
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    
                   

                  </form>
                </div>
            </div>
        </div>
        <footer>
        @include('partials.admin.footer')
    </footer>
    </body>
</html>