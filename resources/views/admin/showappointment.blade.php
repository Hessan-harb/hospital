
<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.css')
</head>
<body>
	
<style>
  .table {
   margin: auto;
   width: 30% !important; 
   margin-right: 19px;
}
</style>
	
      @include('admin.sidebar')
    
   
		<!-- partial -->
	
		
				
			<!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
			<!-- partial -->
           
       
       <div class="page-content row justify-content-center">

        <label class="d-flex d-fixed justify-content-center  align-items-center mt-4 py-7 left-56
           mb-n7 font-bold text-2xl d-inline-block">Show Appointment</label>
        <div class="container col-auto mt-4 py-7 left-4 right-7 flex-wrap grid-margin">

        <table class="table table-responsive table-hover table-dark w-full">
                <thead>
                    <tr>
                        <th scope="col"> Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Doctor Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Message</th>
                        <th scope="col">Status</th>
                        <th scope="col">Approved</th>
                        <th scope="col">Cancel</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $appoint)
                    <tr>
                        <th>{{$appoint->name}}</th>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->phone}}</td>
                        <td>{{$appoint->doctor}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>{{$appoint->message}}</td>
                        <td>{{$appoint->status}}</td>

                        <td>
                            <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('cancel',$appoint->id)}}">Cancel</a>
                        </td>
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
