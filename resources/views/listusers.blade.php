<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <thead>
    <th>
    id</th>
    <th>
    name</th>
    <th>
    email</th>
    </thead>
    <tbody>
    @foreach($students as $students)
    <tr>
    <td>
    {{$students->id}}</td>
    <td>
    {{$students->name}}</td>
    <td>
    {{$students->email}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>