<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>


  @include("admin.admincss")

   
  </head>
  <body>

  <div class="container-scroller">

    @include("admin.navbar")

    <div style="position: relative; top: 60px; right: -150px">
<form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">
 @csrf
<div>
<label>Name:</label>
<input style="color:blue" type="text" name="name" required="" placeholder="Enter name..">
</div><br>

<div>
<label>Speciality:</label>
<input style="color:blue" type="text" name="speciality" required="" placeholder="Enter the speciality..">
</div><br>

<div>
<label>Image:</label>
<input type="file" name="image" required="">
</div><br>

<div>
<input type="submit" value="Save" class="btn btn-danger">
</div>

</form>

<div><br><br>
<div style="position:relative;">

<table bgcolor="black" border="3px">


<tr>


 <th style="padding:30px;">Chef Name</th>
 <th style="padding:30px;">Speciality</th>
 <th style="padding:30px;">Image</th>
 <th style="padding:30px;">Action1</th>
 <th style="padding:30px;">Action2</th>


</tr>
 @foreach($data as $data)
<tr align="center">
 <td>{{$data->name}}</td>
 <td>{{$data->speciality}}</td>
 <td><img height="200px" width="200px" src="/chefimage/{{$data->image}}"></td>
 <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
 <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>



</tr>
@endforeach
</table>

</div>

</div>
    @include("admin.adminscript")

    
  </body>
</html>