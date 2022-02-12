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
    <p>Student Master List</p>
</div>

<table>
  <tr>
    <th style="width:5%">No.</th>
    <th style="width:30%">Student Name</th>
    <th style="width:20%">Email</th>
    <th style="width:15%">Contact No.</th>
    <th style="width:30%">Address</th>
  </tr>
  <tbody>
    @foreach ($users as $key => $student)
      <tr>
          <td>{{++$key}}</td>
          <td>{{ $student->surname }}, {{ $student->name }} {{ $student->middle_name }}</td>
          <td>{{ $student->email }}</td>
          <td>{{ $student->contact_number }}</td>
          <td>{{ $student->address }}</td>
      </tr>
    @endforeach
</tbody>
</table>

</body>
</html>

