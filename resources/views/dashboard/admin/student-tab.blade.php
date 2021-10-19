<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Admin </title>
          
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


  <button ><a href="{{ route('user.register') }}" >Register Students</a></button>

                    <!-- @if (Session::get('success'))
                         <div class="alert alert-success">
                             {{ Session::get('success') }}
                         </div>
                    @endif -->

  <table class="table table-striped table-inverse table-responsive">
                     <thead class="thead-inverse">
                         <tr>
                             <th>ID</th>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Age</th>
                             <th>Action</th>
                         </tr>
                         </thead>
                         <tbody>
                           @foreach ($users as $user)
                           <tr>
                              <td>{{ $user->id }}</td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ $user->age }}</td>
                              <td>

                              <!-- <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a> -->
                              <form action="{{ route('user.edit', $user->id)}}" method="GET">  
                                  @csrf  
                                  
                                  <button class="btn btn-primary" type="submit">Edit</button>  
                              </form>  



                              <form action="{{ route('admin.student-destroy', $user->id)}}" method="POST">
                              @method('DELETE')
                                @csrf  
                                
                                <button class="btn btn-danger" type="submit">Delete</button>  
                              </form>   

                                <!-- <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form> -->
                              </td>

                           </tr>

                           @endforeach
                    
                         </tbody>
                 </table>

    <footer>
        @include('partials.admin.footer')
    </footer>
</body>
</html>