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
    <p>Classes Master List</p>
</div>

<table>
  <tr>
    <th>No.</th>
    <th>Name</th>
    <th>Code</th>
    <th>Level</th>
    <th>Instructor</th>
    <th width="10%">No. of Learning Area Assigned</th>
  </tr>
  <tbody>
    @foreach ($classes as $key => $class)
      <tr>
          <td>{{++$key}}</td>
          <td>{{ $class->class_name }}</td>
          <td>{{ $class->class_code }}</td>
          <td>{{ $class->level }}</td>
          <td>{{ $class->getInstructor->faculty_name  ?? 'Unassigned'  }}</td>
          <td>{{$class->getSubArea->count()}}</td>
      </tr>
    @endforeach
</tbody>
</table>

</body>
</html>

