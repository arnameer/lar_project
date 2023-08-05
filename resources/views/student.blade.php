<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body style="background-color: peachpuff">

<h2>student information</h2>

<table style="width:65%">
  <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Division</th>
    <th>Field Name</th>
  </tr>

@foreach($student as $stud)
<tr>
  <td>{{$stud->id}}</td>
  <td>{{$stud->first_name}}</td>
  <td>{{$stud->last_name}}</td>
  <td>{{$stud->division}}</td>
  <td>{{$stud->field_name}}</td>
</tr>
@endforeach
/
</table>
</body>
</html>
