<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>

@foreach ($errors->all() as $errors)

<li>{{$errors}}</li>

@endforeach

</ul>


    <form action="{{route('login.post')}}" method="POST">


    @csrf
   <label for="">Email</label>
    <input type="text" name="email" placeholder="Enter email"><br>

    <label for="">Password</label>
     <input type="text" name="password" placeholder="Enter password"><br>

     <button type="submit">submit</button>


    </form>
</body>
</html>