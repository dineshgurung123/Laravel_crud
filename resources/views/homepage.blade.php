<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home page</h1>
    {{-- <h1>{{$name}}</h1>    



     @if($age > 10){
    echo "Eligible"
}
@else{
    echo "Not eligible"
} 

--}}

@foreach ($users as  $user)
 <h1>{{$user['name']}}</h1>

@endforeach



</body>
</html>