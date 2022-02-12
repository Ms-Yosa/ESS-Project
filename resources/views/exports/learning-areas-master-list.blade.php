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
    <p>Learning Areas Master List</p>
</div>

<table>
  <tr>
    <th>No.</th>
    <th>Name</th>
    <th>Class Assigned</th>
    <th>Subjects</th>
  </tr>
  <tbody>
    @foreach ($subArea as $key => $sub)
      <tr>
          <td>{{++$key}}</td>
          <td>{{ $sub->name }}</td>
          <td>{{ $sub->class->class_name ?? 'Unassigned'  }}</td>
          <td>
            <ul>
                @foreach ($sub->subjects as $subj)
                  <li>
                    {{ $subj->subject_name ?? 'None'}}
                  </li>
                @endforeach
            </ul>
          </td>
      </tr>
    @endforeach
</tbody>
</table>

</body>
</html>

