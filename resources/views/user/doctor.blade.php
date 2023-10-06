<section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Our Doctor</h2>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container-fluid">
				
				<div class="row ">
					
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
							@foreach($doctor as $doctors)
							<div class="single-pf">
								<img height="300 px" class=" roudned-3" src="doctorimage/{{$doctors->image}}" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
								<div class="py-2">
									<p class="font-bold text-gray-700 ">{{$doctors->name}}</p>
									<p class="text-sm text-gray-700"> {{$doctors->speciality}}</p>
								</div>
								
								
							</div>
							
							@endforeach
						</div>
					</div>
					
				</div>
				
			</div>
			
		</section>