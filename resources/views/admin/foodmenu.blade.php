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
        <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h2><B>Insert Food Images..</B></h2><br>

            <div>
                <label>Title:</label>
                <input style="color: blue;" type="text" name="title" placeholder="Write a title" required>
            </div><br>

            <div>
                <label>Price:</label>
                <input style="color: blue;" type="number" name="price" placeholder="Price" required>
            </div><br>

            <div>
                <label>Image:</label>
                <input type="file" name="image" required>
            </div><br>

            <div>
                <label>Description:</label>
                <input style="color: blue;" type="text" name="description" placeholder="Description" required>
            </div><br>

            <div>
                
                <input style="color: white" type="submit" value="Save">
            </div>
        </form>
    </div>


    @include("admin.adminscript")


  </body>
</html>
