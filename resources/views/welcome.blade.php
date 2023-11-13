<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>
</head>
<body>
    Hello, Bro!
    @foreach($petani as $petanis => $data)
    <tr>    
      <th>{{$data->id}}</th>
      <th>{{$data->email}}</th>
      <th>{{$data->username}}</th>
      <th>{{$data->password}}</th>              
    </tr>
@endforeach
</body>
</html>