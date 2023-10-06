
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
	@include('admin.css')
     <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
        input{
            color: black;
            background: red;
        }
 
    </style>
</head>
<body>
	
   
	
      @include('admin.sidebar')
    
   
		<!-- partial -->
	
		
				
			<!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
			<!-- partial -->
        <div class="page-content">
       
       
        <div class="d-flex justify-content-center  align-items-center mt-4 py-7 left-4 right-7 flex-wrap grid-margin">
        <form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            <h1 class="mb-5 text-4xl">Update Doctor</h1>

            <div>
                <label for="">Doctor Name:</label>
                <input class="rounded-2" type="text" name="name" value="{{$data->name}}" >
            </div>
            <br>

            <div>
                <label for="">Phone No:</label>
                <input class="rounded-2" type="number" name="phone" value="{{$data->phone}}" >
            </div>
            <br>

            <div>
                <label for="">Speciality:</label>
                <input class="rounded-2" type="text" name="speciality" value="{{$data->speciality}}" >
            </div>
            <br>

            <div>
                <label for="">Room:</label>
                <input class="rounded-2" type="text" name="room" value="{{$data->room}}" >
            </div>
            <br>

            <div>
                <label for="">Image:</label>
                <img height="150" width="150" src="doctorimage/{{$data->image}}" alt="">
            </div>
            <br>

            <div>
                <label for="">Change Image</label>
                <input type="file" name="file">
            </div>
            <br>

            <div>
                <input type="submit" class="btn btn-danger">
            </div>
            <br>


        </form>
        
          <div class="mt-n7 ">

            
          </div>
        </div>

    </div>
<!-- partial:partials/_navbar.html --><!-- partial:partials/_navbar.html -->
	@include('admin.script')
</body>
</html>    
