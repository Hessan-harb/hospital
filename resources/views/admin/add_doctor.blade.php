
<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.css')
</head>
<body>
	
<style type="text/css">
  label{
    display: inline-block;
    width: 200px;
  }
 
</style>
		
      @include('admin.sidebar')
      @include('admin.navbar')


      <div class="page-content">
        @if(session()->has('message'))
  
        <div class="alert alert-primary" role="alert">
        {{session()->get('message')}} 
        </div>
          @endif
      

        <label class="d-flex d-fixed justify-content-center  align-items-center mt-4 py-7 left-56
           mb-n7 font-bold text-2xl d-inline-block"></label>
        <div class="d-flex justify-content-center  align-items-center mt-4 py-7 left-4 right-7 flex-wrap grid-margin">

          <div class="mt-n7 ">

            <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
              @csrf

              <h1 class="mb-5 text-4xl">Add Doctor</h1>

              <div>

                <label for="">Doctor Name:</label>
                <input class="rounded-2" type="text" name="name" placeholder="Name" required="">

              </div>
              <br>
              <div>

                <label for="">Phone Number:</label>
                <input class="rounded-2" type="text" name="number" required="" placeholder="Phone">
                
              </div>
              <br>
              <div>

                <label for="">Speciality:</label>
                <select name="speciality" required="" class="text-gray-800 w-200px">
                <option>--Select--</option>
                  <option value="skin">Skin</option>
                  <option value="heart">Heart</option>
                  <option value="eye">Eye</option>
                  <option value="nose">Nose</option>
                </select>
                
              </div>
              <br>
              <div>

                <label for="">Room No:</label>
                <input class="rounded-2" type="text" name="room" required="" placeholder="Room Numbre">
                
              </div>
              <br>
              <div>

                <label >Doctor Image:</label>
                <input class="rounded-2" type="file" name="file" >
                
              </div>
              <br>

              <div>

                
                <input class="btn btn-success bg-gray-400 text-gray-800 rounded-2" type="submit"  >

              </div>


            </form>
          </div>
        </div>

    </div>


			@include('admin.script')

	
</body>
</html>    
   
