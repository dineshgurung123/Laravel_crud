<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="{{route('contacts.store')}}" method="post">

 @csrf

  <div class="mb-3">
    <label >Name</label>
    <input type="text" name="name" >
  </div>


  <div  >
    <label >Mobile number</label>
    <input type="tel"  name="mobile">
  </div>
  
  <button type="submit">Submit</button>
</form>



</body>
</html>