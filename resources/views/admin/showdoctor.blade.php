
<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.css')
</head>
<body>
	<div class="main-wrapper">

	
      @include('admin.sidebar')
    
   
		<!-- partial -->
	
		<div class="page-wrapper">
				
			<!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
			<!-- partial -->
            <div class="page-content row justify-content-center">

<label class="d-flex d-fixed justify-content-center  align-items-center mt-4 py-7 left-56
   mb-n7 font-bold text-2xl d-inline-block">All Doctor</label>
<div class="container col-auto mt-4 py-7 left-4 right-7 flex-wrap grid-margin">
<!-- ==============2:59================ -->
<table class="table table-responsive table-hover table-dark w-full">
        <thead>
            <tr>
                <th scope="col"> Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Speciality</th>
                <th scope="col">Room No</th>
                <th scope="col">Image</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
               
        </thead>
        <tbody>
            @foreach($data as $doctor)
           <tr>
            <td>{{$doctor->name}}</td>
            <td>{{$doctor->phone}}</td>
            <td>{{$doctor->speciality}}</td>
            <td>{{$doctor->room}}</td>
            <td>
                <img src="doctorimage/{{$doctor->image}}" alt="">
            </td>
            <td><a href="{{url('deletedoctor',$doctor->id)}}" class="btn btn-danger">Delete</a></td>
            <td><a href="{{url('upbatedoctor',$doctor->id)}}" class="btn btn-primary">Update</a></td>

           </tr>
           
            @endforeach
        
        </tbody>
    </table>
  <div class="mt-n7 ">

    
  </div>
</div>
<!-- partial:partials/_navbar.html --><!-- partial:partials/_navbar.html -->
	@include('admin.script')
</body>
</html>    
