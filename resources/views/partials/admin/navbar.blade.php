
<link rel="stylesheet" href="{{ URL::asset('css/partials/sidebar.css') }}" />

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<nav class="navbar navbar-light" style="background-color:#FBD848">
<button class="openbtn" onclick="openNav()">☰</button>  

    <a class="navbar-brand" href="#" >
        <img src="/assets/Logo.png" width="30" height="30" style="border-radius:100%;border: 2px solid #FD6300 " class="d-inline-block align-top" alt="AMSAI Logo">
        AMSAI Student Information System
    </a>
</nav>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>



