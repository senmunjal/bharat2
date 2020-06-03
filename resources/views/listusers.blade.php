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
    <th>
    number</th>

    </thead>
    <tbody>
    @foreach($admins as $admins)
    <tr>
    <td>
    {{$admins->id}}</td>
    <td>
    {{$admins->name}}</td>
    <td>
    {{$admins->email}}</td>
    <td>
    {{$admins->number}}</td>
 
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>