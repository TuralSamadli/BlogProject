@extends('layouts.master')
@section('content')


	<div class="main-content">
		<div class="main-content-inner">
			
			<!-- About div Start -->
				<div class="home-section" id="home">
					<div class="particals"></div>
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6">
								<div class="home-content">
									<div class="home-image">
										<img src="{{asset('assets/images/tural.jpg')}}" alt="" class="wow zoomIn" data-wow-delay="0.2s">
									</div>
									<div class="home-main-content">
										<h4 class="heading wow fadeInUp" data-wow-delay="0.3s">
Tural Samadli										</h4>
										<div class="designation wow zoomIn" data-wow-delay="0.4s">
											<span>
												I'm a <span class="typed"></span>
											</span>
										</div>
										<div class="social-info wow fadeInUp" data-wow-delay="0.5s">
											<ul>
												<li>
													<a href="{{ $contact -> facebook }}">
														<i class="fab fa-facebook-f"></i>
													</a>
												</li>
												<li>
													<a href="{{ $contact -> linkedin }}">
														<i class="fab fa-linkedin-in"></i>
													</a>
												</li>
												<li>
													<a href="{{ $contact -> github }}">
														<i class="fab fa-github"></i>
													</a>
												</li>
												<li>
													<a href="{{ $contact -> instagram }}">
														<i class="fab fa-instagram"></i>
													</a>
												</li>
											</ul>
										</div>
										<div class="about-links wow fadeInUp" data-wow-delay="0.6s">
											<a href="#" class="mybtn3 mybtn-bg"> <span>Contact Me</span> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- About div End -->

			<!-- About div Start -->
			<div class="about-section" id="about">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<div class="section-heading wow fadeInUp" data-wow-delay="0.2s">
								<h2 class="title">
									About <span class="color">Me</span>
									<span class="bg-text">About</span>
								</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="about">
								<div class="row">
									<div class="col-lg-4">
										<div class="about-image wow fadeInUp" data-wow-delay="0.3s">
											<img src="{{asset('assets/images/tural.jpg')}}" alt="">
										</div>
										
									</div>
									<div class="col-lg-8 align-self-center">
										<div class="short-description wow fadeInUp">
											<p>
dd											<p>
												Left till here away at to whom past. Feelings laughing at no wondered repeated provided finished. It acceptance thoroughly my advantages everything as.
											</p>
											<div class="about-links">
												<a href="#" class="mybtn3 mybtn-bg"> <span>Download CV</span> </a>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="about-content wow fadeInUp">
											<div class="personal-info">
												<ul>
													<li>
														<span><label>Birthday:</label> {{ $about->birthday}} </span>
													</li>
													<li>
														<span><label>Age:</label>  </span>
													</li>
													<li>
														<span><label>City:</label> {{ $about->city}} </span>
													</li>
													<li>
														<span><label>Interests:</label> {{ $about->interests}} </span>
													</li>
													<li>
														<span><label>Study:</label> {{ $about->study}} </span>
													</li>
													<li>
														<span><label>Degree:</label> Master</span>
													</li>	
													<li>
														<span><label>Website:</label> <a href=" {{ $about->website}} ">{{ $about->website}}</a></span>
													</li>
													<li>
														<span><label>Mail:</label> {{ $contact->email}} </span>
													</li>
													<li>
														<span><label>Phone:</label> {{ $contact->phone}} </span>
													</li>
													<li>
														<span><label>Github:</label> <a href=" {{ $contact -> github }} ">TuralSamadli</a></span>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!-- About div End -->
			
			<!-- Resume Area Start -->
			<div class="resume-wrapper" id="resume">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<div class="section-heading wow fadeInUp" data-wow-delay="0.2s">
								<h2 class="title">
									My <span class="color">Resume</span>
									<span class="bg-text">Resume</span>
								</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="resume-box">
								<div class="resume-title">
									<h4 class="title">
											Education
									</h4>
								</div>
								<div class="education-list">
									<div class="single-education  wow fadeInUp">
											<div class="year">
												<span>2006-2008</span>
											</div>
										<h4 class="university-name">
											Envato University 
										</h4>
										<p class="degree">MSC in Computer Engineer </p>
									</div>
									<div class="single-education wow fadeInUp">
											<div class="year">
												<span>2003-205</span>
											</div>
											<h4 class="university-name">
												Envato University 
											</h4>
											<p class="degree">BSC in Computer Engineer </p>
									</div>
									<div class="single-education wow fadeInUp">
										<div class="year">
											<span>2000-2002</span>
										</div>
										<h4 class="university-name">
											Envato University 
										</h4>
										<p class="degree">HSC in Computer Engineer </p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="resume-box">
								<div class="resume-title">
									<h4 class="title">
										Experience
									</h4>
								</div>
								<div class="education-list">
									<div class="single-education wow fadeInUp">
											<div class="year">
												<span>2014-2018</span>
											</div>
										<h4 class="university-name">
											Envato Company 
										</h4>
										<p class="degree">Full Stack Web Developer</p>
									</div>
									<div class="single-education wow fadeInUp">
											<div class="year">
												<span>2011-2014</span>
											</div>
											<h4 class="university-name">
												Envato Company 
											</h4>
											<p class="degree">Web Developer</p>
									</div>
									<div class="single-education wow fadeInUp">
										<div class="year">
											<span>2009-2011</span>
										</div>
										<h4 class="university-name">
											Envato Company 
										</h4>
										<p class="degree"> Web Designer</p>
									</div>
								</div>
							</div>
						</div>
						
			<!-- Resume Area End -->
			

			<!-- Contact Area Start -->
			<div class="contact" id="contact">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<div class="section-heading wow fadeInUp" data-wow-delay="0.2s">
								<h2 class="title">
									Get In <span class="color">Touch</span>
									<span class="bg-text">Contact</span>
								</h2>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6">
							<!-- Single Info -->
							<div class="single-info wow fadeInUp">
								<div class="info-icon">
									<i class="flaticon-placeholder"></i>
								</div>
								<div class="info-content">
									<h5>My Location:</h5>
									<p>{{ $contact->address }}</p>
								</div>
		
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<!-- Single Info -->
							<div class="single-info wow fadeInUp">
								<div class="info-icon">
									<i class="flaticon-telephone"></i>
								</div>
								<div class="info-content">
									<h5>Phone Number:</h5>
									<p>{{ $contact->phone }}</p>
								</div>
		
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<!-- Single Info -->
							<div class="single-info wow fadeInUp">
		
								<div class="info-icon">
									<i class="flaticon-email-2"></i>
								</div>
								<div class="info-contentr">
									<h5>Email Address:</h5>
									<p>{{ $contact->email }}</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row cAndm">
						<div class="col-lg-6">
							<div class="home-page-form">
								<div class="contact-form">
																
										<div class="controls">
											<div class="row">
												<div class="col-md-6">
													<form id="contact-form" method="POST" action="{{ route('user_messages') }}">
														@csrf
													<div class="form-group">
													<input id="name" type="text" name="name" class="form-control" placeholder="Name*" required="required" data-error="Name is required.">
														<div class="help-block with-errors"></div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<input id="email" type="email" name="email" class="form-control" placeholder="Email*" required="required" data-error="Valid email is required.">
														<div class="help-block with-errors"></div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
													<input id="subject" type="text" name="subject" class="form-control" placeholder="Subject*" required="required" data-error="Subject is required.">
														<div class="help-block with-errors"></div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
													<textarea id="message" name="message" class="form-control" placeholder="Message*" rows="7" required="required" data-error="Please,leave us a message."></textarea>
														<div class="help-block with-errors"></div>
													</div>
												</div>
												<div class="col-md-12">
													<button type="submit" class="mybtn3 mybtn-bg"><span>Send Message</span></button>
												</div>
											</div>
										</div>
									</form> <!-- End Contact From -->
								</div>
							</div>
						</div>
		
						 
					</div>
					<!--/.row-->
				</div>
				<!--/.container-->
			</div>
			<!-- Contact Area End -->

		</div>
	</div>
	<!-- Main Content Area End -->






	<!-- Back to Top Start -->
	<div class="bottomtotop">
		<i class="fas fa-chevron-right"></i>
	</div>
	<!-- Back to Top End -->

@endsection