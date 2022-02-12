<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  width: 100%;
  border:none;
}
th{
background-color: #FDD85D;
  padding: 8px;
}

td, th, {
  border: 1px solid #dddddd;
  text-align: left;
  font-size: 12px;
  border:none;
}

.center {
  text-align: center;
}

h4 {
    letter-spacing: 2px;
}

</style>
</head>
<body>

<div class="center">
    <img src="https://github.com/Ms-Yosa/ESS-Project/blob/master/public/Assets/Logo.png?raw=true" width="70">
    <h4>AMSAI Learning School</h4>
    <p>Faculty Master List</p>
</div>

<table>
  <tr>
    <th style="width:5%">No.</th>
    <th style="width:30%">Instructor Name</th>
    <th style="width:20%">Email</th>
    <th style="width:15%">Contact No.</th>
    <th style="width:30%">Address</th>
  </tr>
  <tbody>
    @foreach ($faculty as $key => $fac)
      <tr>
          <td>{{++$key}}</td>
          <td>{{ $fac->faculty_surname }}, {{ $fac->faculty_name }} {{ $fac->faculty_middle_name }}</td>
          <td>{{ $fac->faculty_email }}</td>
          <td>{{ $fac->contact_number }}</td>
          <td>{{ $fac->address }}</td>
      </tr>
    @endforeach
</tbody>
</table>

</body>
</html>

