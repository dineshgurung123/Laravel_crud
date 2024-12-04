<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<h1>welcome</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
       
  @foreach($contacts as $contact)
     <tr>
     <th scope="row">{{ $contact->id}}</th>
     <td>{{ $contact->name}}</td>
     <td>{{ $contact->mobile}}</td>
      <td>
        <a href="{{ route('contacts.edit',$contact->id) }}">Edit</a>
        <a href="{{route('contacts.delete', $contact->id)}}">Delete</a>
      </td>
     </tr> 
   
@endforeach
  </tbody>
</table>

<div>

<form action="{{route('contacts.store')}}" method="post">

 @csrf

  <div class="mb-3">
    <label >Name</label>
    <input type="text" name="name">
  </div>


  <div  >
    <label >Mobile number</label>
    <input type="tel"  name="mobile">
  </div>
  
  <button type="submit">Submit</button>
</form>
</div>

</body>
</html>