<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2> Book An Appointment</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<form class="form" action="{{url('appointment')}}" method="post">
							@csrf
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="name" type="text" placeholder="Name">
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="email" type="email" placeholder="Email">
									</div>
								</div>
								
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="number" type="text" placeholder="Number">
									</div>
								</div>

								<select class="form-select" name="doctor" id="doctor">
									<option >Select Doctor</option>
									@foreach($doctor as $doctors)
									<option value="{{$doctors->name}}">{{$doctors->name}}--speciality--{{$doctors->speciality}}</option>
									@endforeach
								</select>

								

								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input type="text" name="date" placeholder="Date" id="datepicker">
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Write Your Message Here....."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn btn-danger bg-gray-500">Book An Appointment</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
									<p>( We will be confirm by an Text Message )</p>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="img/contact-img.png" alt="#">
						</div>
					</div>
				</div>
			</div>
		</section>