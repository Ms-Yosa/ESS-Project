<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard | Home</title>
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    



</head>
<body style="font-family: 'Nunito', sans-serif">
    <!-- Image and text -->
    <nav class="navbar navbar-light" style="background-color:#FBD848">
    <a class="navbar-brand" href="#" >
        <img src="/assets/Logo.png" width="30" height="30" style="border-radius:100%;border: 2px solid #FD6300 " class="d-inline-block align-top" alt="AMSAI Logo">
        AMSAI Student Information System
    </a>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                 <h4>Admin Dashboard</h4><hr>
                 <table class="table table-striped table-inverse table-responsive">
                     <thead class="thead-inverse">
                         <tr>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Action</th>
                         </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>{{ Auth::guard('admin')->user()->name }}</td>
                                 <td>{{ Auth::guard('admin')->user()->email }}</td>
                                 <td>
                                     <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                     <form action="{{ route('admin.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                                 </td>
                             </tr>
                         </tbody>
                 </table>
                 <div class="content-2">
              
                    <button ><a href="{{ route('user.register') }}" >Register Students</a></button>
                    <button ><a href="{{ route('faculty.register') }}" >Register Faculties</a></button>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>