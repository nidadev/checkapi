@extends('layouts.app2')

@section('content')
<style>
	header {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

/* Media Query for devices withi coarse pointers and no hover functionality */

/* This will use a fallback image instead of a video for devices that commonly do not support the HTML5 video element */

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
  }

  header video {
    display: none;
  }
}
	</style>
<header>

  <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
  <div class="overlay"></div>

  <!-- The HTML5 video element that will create the background video on the header -->
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" onloadstart="this.volume=1.5">
    <source src="{{ asset('file/vdo.mp4') }}" type="video/mp4">
  </video>

  <!-- The header content -->
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <!--h1 class="display-3">Video Header</h1>
        <p class="lead mb-0">Using HTML5 Video and Bootstrap</p-->
		<h1 class="text-white font_45"><span class="col_blue">We </span>Simplify Your<span class="col_blue"> Search</span></h1>
					 <!--h1><a class="text-white p-0 navbar-brand fw-bold logo_position_rel" href="{{ url('/home') }}"> PROPE <i class="fa fa-home col_blue me-1 logo_position_abs"></i> &nbsp;&nbsp;<span class="col_red">LYZE</span></a></h1-->
                     <p class="text-white mt-3 fs-5">  Empower Your Real Estate Campaigns with Precision and Speed</p>
						<ul class="mb-0 mt-4">
							<li class="d-inline-block"><a class="button" href="{{ url('/register')}}"><i class="fa fa-home me-1 align-middle fs-5"></i> Land </a></li>
							<li class="d-inline-block ms-2"><a class="button_1" href="{{ url('/register')}}"><i class="fa fa-building me-1 fs-5 align-middle"></i> Houses </a></li>
						</ul>
      </div>
    </div>
  </div>
</header>
	<!--section id="center" class="center_h">
	<!--video id="video" autoplay="autoplay" loop="loop" onloadstart="this.volume=0.2">
     <source src="{{ asset('file/vdo.mp4') }}" type="video/mp4"></source>
  </video-->
		<!--div class="center_om">
			<div class="container-xl">

				<div class="row center_h1">
					<div class="col-md-12">
						<h1 class="text-white font_45"><span class="col_blue">We </span>Simplify Your<span class="col_blue"> Search</span></h1>
					 <!--h1><a class="text-white p-0 navbar-brand fw-bold logo_position_rel" href="{{ url('/home') }}"> PROPE <i class="fa fa-home col_blue me-1 logo_position_abs"></i> &nbsp;&nbsp;<span class="col_red">LYZE</span></a></h1-->
                     <!--p class="text-white mt-3 fs-5">  Empower Your Real Estate Campaigns with Precision and Speed</p>
						<ul class="mb-0 mt-4">
							<li class="d-inline-block"><a class="button" href="#"><i class="fa fa-home me-1 align-middle fs-5"></i> Land </a></li>
							<li class="d-inline-block ms-2"><a class="button_1" href="#"><i class="fa fa-building me-1 fs-5 align-middle"></i> Houses </a></li>
						</ul>
					</div>
				</div>

	</section-->

	<section id="work_h" class="p_3">
		<div class="container-xl">
			<div class="row work_h1 text-center mb-4">
				<div class="col-md-12">
					<h2>How It Works</h2>
					<hr class="line mx-auto">
					<p class="mb-0"></p>
				</div>
			</div>
			<div class="row work_h2">
				<div class="col-md-12">
					<div class="work_h2i p-4 rounded_10 shadow_box text-center">
						<p class="mb-0">Launching your real estate marketing campaign is now simpler than ever. Propelyze enables you to quickly identify target areas, set pricing, access property owner details, and clean your data, all in just moments! We streamline research, comparison, and data management, giving you more time to focus on successful property flips.

Our services cover both Vacant Land and Residential Properties, with all data updated in real time from DataTree.
</p>
					</div>
				</div>
				
	
			</div>
		</div>
	</section>

	<section id="work_h" class="pt-5 pb-5 bg_blue">
   <div class="container-xl">
	  <div class="row work_h1 text-center mb-4">
		 <div class="col-md-12">
		   <h2 class="text-white">Services</h2>
		   <hr class="line mx-auto">
		   <p class="mb-0 text-white">What We do</p>
		 </div>
	  </div>
	  <div class="row work_h2 text-white">
		 <div class="col-md-4">
		    <div class="work_h2i p-4 rounded_10 shadow_box text-center" style="background: #6C60FE;">
			  <span class="d-inline-block bg-warning text-white rounded-circle fs-1"><a class="text-white" href="{{ url('/research')}}"><i class="fa fa-globe"></i></a></span>
			  <h5 class="mt-3 mb-3">Location Research</h5>
			  <p class="mb-0 text-white">Explore comprehensive data for every county across the nation to identify potential markets or gain insights into regional economic trends.</p>
			</div>
		 </div>
		 <div class="col-md-4">
		    <div class="work_h2i p-4 rounded_10 shadow_box text-center"  style="background: #6C60FE;">
			  <span class="d-inline-block bg-danger text-white rounded-circle fs-1"><a class="text-white" href="{{ url('/priceland')}}"><i class="fa fa-download"></i></a></span>
			  <h5 class="mt-3 mb-3">Owner Record Download</h5>
			  <p class="mb-0 text-white">Easily obtain property details that match your search criteria directly through our integrated data sources. </p><br>
			</div>
		 </div>
		
		 <div class="col-md-4">
		    <div class="work_h2i p-4 rounded_10 shadow_box text-center"  style="background: #6C60FE;">
			  <span class="d-inline-block bg-success text-white rounded-circle fs-1"><a class="text-white" href="{{ url('/compreport')}}"><i class="fa fa-phone"></i></a></span>
			  <h5 class="mt-3 mb-3">Skip Tracing</h5>
			  <p class="mb-0 text-white">Augment your property data with skip tracing to acquire owner contact information, including phone numbers and emails, for effective digital outreach.</p>
			</div>
		 </div>
		 <div class="col-md-4">
		    <div class="work_h2i p-4 rounded_10 shadow_box text-center mt-3"  style="background: #6C60FE;">
			  <span class="d-inline-block bg-danger text-white rounded-circle fs-1"><a class="text-white" href="{{ url('/pricehouse')}}"><i class="fa fa-tag"></i></a></span>
			  <h5 class="mt-3 mb-3">Property Pricing</h5>
			  <p class="mb-0 text-white">Get personalized pricing for each property to boost your marketing impact.</p><br>
			</div>
		 </div>
		 <div class="col-md-4">
		    <div class="work_h2i p-4 rounded_10 shadow_box text-center mt-3"  style="background: #6C60FE;">
			  <span class="d-inline-block bg-success text-white rounded-circle fs-1"><a class="text-white" href="{{ url('/priceland')}}"><i class="fa fa-upload"></i></a></span>
			  <h5 class="mt-3 mb-3"> External List Uploading</h5>
			  <p class="mb-0 text-white">Import your existing owner records from other sources, and we will promptly apply pricing to them for you.</p>
			</div>
		 </div>
		 <div class="col-md-4">
		    <div class="work_h2i p-4 rounded_10 shadow_box text-center mt-3"  style="background: #6C60FE;">
			  <span class="d-inline-block bg-warning text-white rounded-circle fs-1"><a class="text-white" href="{{ url('/priceland')}}"><i class="fa fa-table"></i></a></span>
			  <h5 class="mt-3 mb-3"> Data Scrubbing</h5>
			  <p class="mb-0 text-white">Efficiently remove irrelevant or inaccurate data without manually sifting through spreadsheets.</p><br>
			</div>
		 </div>
		 <div class="col-md-4">
		    <div class="work_h2i p-4 rounded_10 shadow_box text-center mt-3"  style="background: #6C60FE;">
			  <span class="d-inline-block bg-success text-white rounded-circle fs-1"><a class="text-white" href="{{ url('/compreport')}}"><i class="fa fa-road"></i></a></span>
			  <h5 class="mt-3 mb-3">Road Access</h5>
			  <p class="mb-0 text-white">Check if properties have direct road access and pinpoint specific access points.</p><br>
			</div>
		 </div>
		 <div class="col-md-4">
		    <div class="work_h2i p-4 rounded_10 shadow_box text-center mt-3"  style="background: #6C60FE;">
			  <span class="d-inline-block bg-danger text-white rounded-circle fs-1"><a class="text-white" href="{{ url('/compreport')}}"><i class="fa fa-envelope"></i></a></span>
			  <h5 class="mt-3 mb-3"> Topography</h5>
			  <p class="mb-0 text-white">Assess the usable area of your property and filter out those that don't meet your criteria.</p><br>
			</div>
		 </div>
		
		 <div class="col-md-4">
		    <div class="work_h2i p-4 rounded_10 shadow_box text-center mt-3"  style="background: #6C60FE;">
			  <span class="d-inline-block bg-success text-white rounded-circle fs-1"><a class="text-white" href="{{ url('/priceland')}}"><i class="fa fa-globe"></i></a></span>
			  <h5 class="mt-3 mb-3">Campaign Mapping</h5>
			  <p class="mb-0 text-white">Enhance your exports with KML maps to visually organize owner records and nearby comparable properties</p>
			</div>
		 </div>
		 <div class="col-md-4">
		    <div class="work_h2i p-4 rounded_10 shadow_box text-center mt-3"  style="background: #6C60FE;">
			  <span class="d-inline-block bg-warning text-white rounded-circle fs-1"><a class="text-white" href="{{ url('/compreport')}}"><i class="fa fa-file"></i></a></span>
			  <h5 class="mt-3 mb-3"> Comp Reporting</h5>
			  <p class="mb-0 text-white">Create detailed reports that include owner information, property histories, pricing insights, and comparative analyses in one convenient file.</p>
			</div>
		 </div>
		 <div class="col-md-4">
		    <div class="work_h2i p-4 rounded_10 shadow_box text-center mt-3"  style="background: #6C60FE;">
			  <span class="d-inline-block bg-success text-white rounded-circle fs-1"><a class="text-white" href="{{ url('/research')}}"><i class="fa fa-laptop"></i></a></span>
			  <h5 class="mt-3 mb-3"> Comp API</h5>
			  <p class="mb-0 text-white">Instantly access a vast repository of 2 million comparable property records at your fingertips.</p><br>
			</div>
		 </div>
		 <div class="col-md-4">
		    <div class="work_h2i p-4 rounded_10 shadow_box text-center mt-3"  style="background: #6C60FE;">
			  <span class="d-inline-block bg-danger text-white rounded-circle fs-1"><a class="text-white" href="{{ url('/support')}}"><i class="fa fa-user-plus"></i></a></span>
			  <h5 class="mt-3 mb-3"> Strategic Partnership</h5>
			  <p class="mb-0 text-white">Connect with industry experts, including investors, educators, and professionals to elevate your business ventures.</p>
			</div>
		 </div>
		 <div class="col-md-4">
		    <div class="work_h2i p-4 rounded_10 shadow_box text-center mt-3"  style="background: #6C60FE;">
			  <span class="d-inline-block bg-success text-white rounded-circle fs-1"><a class="text-white" href="{{ url('/support')}}"><i class="fa fa-check"></i></a></span>
			  <h5 class="mt-3 mb-3">Consulting</h5>
			  <p class="mb-0 text-white">Engage with our specialists to discuss land investment strategies, data analysis techniques, research methods, and more.</p>
			</div>
		 </div>
	  </div>
 </div>   
 </section>
	

	<section id="subs" class="p_3">
		<div class="container-xl">
			<div class="row subs_1 mb-4">
				<div class="col-md-8">
					<div class="subs_1l">
						<h2>Pricing & Subscriptions</h2>
						<hr class="line">
						<p class="mb-0"></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="subs_1r text-end">
						<ul class="nav nav-tabs mb-0 border-0">
							<!--li class="nav-item d-inline-block me-2">
								<a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
									<span class="d-md-block">Monthly</span>
								</a>
							</li-->
							<!--li class="nav-item d-inline-block">
								<a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
									<span class="d-md-block">Yearly</span>
								</a>
							</li-->
						</ul>
					</div>
				</div>
			</div>
			<div class="subs_2 row">
				<div class="col-md-12">
					<div class="tab-content">
						<div class="tab-pane active" id="home">
							<div class="subs_2i row">
								<div class="col-md-4">
									<div class="subs_2i1 border_1 rounded_10 p-4">
									<h4 class="plan_red">Monthly $34.99</h4>
         <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Research and Analytics</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Location Searching</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Location Analysis and Model Offer Pricing</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> View Comps</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Owner/Property Record Exporting</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> External List Upload Pricing</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Comp Reporting     </h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Full Customer Support     </h6>
		 <h6 class="mt-3"><i class=""></i>&nbsp; </h6>
		 <h6 class="mt-3"><i class=""></i>&nbsp;</h6>
			<h6 class="mb-0 mt-4"><a class="button text-center d-block" href="{{ url('/subscription')}}">Start Free Trial </a></h6>
									</div>
								</div>
								<div class="col-md-4">
									<div class="subs_2i1 border_1 rounded_10 p-4">
									<h4 class="plan_green">Monthly Bronze $49.99</h4>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Research and Analytics</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Location Searching</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Location Analysis and Model Offer Pricing</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> View Comps</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Owner/Property Record Exporting</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Comp Reporting</h6>		 
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Full Customer Support</h6> 
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Export Comps</h6> 
		 <h6 class="mt-3"><i class=""></i>&nbsp; </h6>
		 <h6 class="mt-3"><i class=""></i></h6>

	<h6 class="mb-0 mt-4"><a class="button text-center d-block" href="{{ url('/subscription')}}">Start Free Trial </a></h6>
									</div>
								</div>
								<div class="col-md-4">
									<div class="subs_2i1 border_1 rounded_10 p-4">
									<h4 class="plan_orange" style="border-radius:21px;background-color:#ffc107;color:#fff;">Gold $499</h4>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Research and Analytics</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Location Searching</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Location Analysis and Model Offer Pricing</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> View Comps</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Owner/Property Record Exporting</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Comp Reporting</h6>
         <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> 24 Hrs Support</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Export Comps</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> 20 Free Comp Reports/Month</h6>
		 <h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> $0.01 Discount per Export Record</h6>
	<h6 class="mb-0 mt-4"><a class="button text-center d-block" href="{{ url('/subscription')}}">Start Free Trial </a></h6>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="profile">
							<div class="subs_2i row">
								<div class="col-md-4">
									<div class="subs_2i1 border_1 rounded_10 p-4">
										<h4 class="plan_red">Popular</h4>
										<p class="mt-3">Omnis velit quia. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint.</p>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 col_blue"></i> 60 Listing Per Login</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 col_blue"></i> 110+ Users</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 col_blue"></i> Enquiry On Listing</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 col_blue"></i> 24 Hrs Support</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 col_blue"></i> Custom Review</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 col_blue"></i> Impact Reporting</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 col_blue"></i> Onboarding & Account</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 col_blue"></i> API Access</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 col_blue"></i> Transaction Tracking</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 col_blue"></i> Branding</h6>
										<h6 class="mb-0 mt-4"><a class="button text-center d-block" href="{{ url('/subscription')}}">Get Quote </a></h6>
									</div>
								</div>
								<div class="col-md-4">
									<div class="subs_2i1 border_1 rounded_10 p-4">
										<h4 class="plan_orange">Trending</h4>
										<p class="mt-3">Omnis velit quia. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint.</p>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> 70 Listing Per Login</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> 110+ Users</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Enquiry On Listing</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> 24 Hrs Support</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Custom Review</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Impact Reporting</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Onboarding & Account</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> API Access</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Transaction Tracking</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-warning"></i> Branding</h6>
										<h6 class="mb-0 mt-4"><a class="button text-center d-block" href="{{ url('/subscription')}}">Get Quote </a></h6>
									</div>
								</div>
								<div class="col-md-4">
									<div class="subs_2i1 border_1 rounded_10 p-4">
										<h4 class="plan_blue">New Plan</h4>
										<p class="mt-3">Omnis velit quia. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint.</p>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-success"></i> 90 Listing Per Login</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-success"></i> 110+ Users</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-success"></i> Enquiry On Listing</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-success"></i> 24 Hrs Support</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-success"></i> Custom Review</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-success"></i> Impact Reporting</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-success"></i> Onboarding & Account</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-success"></i> API Access</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-success"></i> Transaction Tracking</h6>
										<h6 class="mt-3"><i class="fa fa-check-square-o me-1 text-success"></i> Branding</h6>
										<h6 class="mb-0 mt-4"><a class="button text-center d-block" href="{{ url('/subscription')}}">Get Quote </a></h6>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="faq" class="p_3 bg-light">
		<div class="container-xl">
			<div class="faq_1 row">
				<div class="col-md-4">
					<div class="faq_1l">
						<img src="{{ asset('img/23.jpg') }}" class="w-100 rounded_10" alt="abc">
					</div>
				</div>
				<div class="col-md-8">
					<div class="faq_1r">
						<h2>Frequently Asked Questions</h2>
						<hr class="line">
						<p></p>
						<div class="accordion" id="accordionExample">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<i class="fa fa-check-circle me-2"></i> What Is Propelyze?
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
									<div class="accordion-body">
										<p class="mb-0">Propelyze is a robust real estate marketing platform designed to streamline your direct mail and digital marketing campaigns. It offers tools for targeting specific areas, pricing mailers, accessing property records, and cleaning your lists for efficient use with your marketing or mailing services.</p>
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<i class="fa fa-check-circle me-2"></i> What Benefits Does Propelyze Offer?
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">Propelyze enhances your marketing efforts by providing in-depth research, competitive pricing models, and advanced location analysis. Our platform simplifies the process of targeting and pricing, ultimately boosting the efficiency of your marketing campaigns.</p>
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<h2 class="accordion-header" id="headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<i class="fa fa-check-circle me-2"></i> Can Propelyze Handle More Than Just Pricing?
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">Yes, Propelyze is a comprehensive tool that includes features for research, rapid location searches, property analysis, record access, and list management. This all-in-one approach ensures that your marketing campaigns are well-supported from start to finish.</p>
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<h2 class="accordion-header" id="headingFour">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										<i class="fa fa-check-circle me-2"></i>Does Propelyze Require Me to Learn a New Pricing Method?
									</button>
								</h2>
								<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">Not at all. Propelyze is designed to integrate with and enhance your existing pricing methods, automating the processes you are already familiar with for greater efficiency.</p>
									</div>
								</div>
							</div>							

							<div class="accordion-item">
								<h2 class="accordion-header" id="headingFive">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
										<i class="fa fa-check-circle me-2"></i> Is Propelyze a Fully Automated System?
									</button>
								</h2>
								<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">While Propelyze offers significant automation, it cannot replace your decision-making. You will still need to make strategic choices regarding your mailing targets and the content of your offers.</p>
									</div>
								</div>
							</div>

							<!--div class="accordion-item">
								<h2 class="accordion-header" id="Headingsix">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
										<i class="fa fa-check-circle me-2"></i> What Types of Data Are Included in Propelyze?
									</button>
								</h2>
								<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="Headingsix" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">Propelyze provides access to extensive property and owner records, with data sourced from multiple reliable platforms to ensure accuracy and relevance for your marketing needs.</p>
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<h2 class="accordion-header" id="Headingsev">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
										<i class="fa fa-check-circle me-2"></i> Do I Need an Additional Data Subscription to Use Propelyze?
									</button>
								</h2>
								<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="Headingsev" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">No, Propelyze includes all necessary data access within its platform. There’s no need for separate subscriptions or additional contracts.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="Headingeig">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEig" aria-expanded="false" aria-controls="collapseEig">
										<i class="fa fa-check-circle me-2"></i> How Is the Data in Propelyze Sourced?
								</h2>
								<div id="collapseEig" class="accordion-collapse collapse" aria-labelledby="Headingeig" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">We aggregate data from leading real estate databases and platforms to ensure you have accurate and up-to-date information. This includes property details, ownership records, and market trends that are essential for your marketing efforts.</p>
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<h2 class="accordion-header" id="Headingnin">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNin" aria-expanded="false" aria-controls="collapseNin">
										<i class="fa fa-check-circle me-2"></i>Are There Hidden Easter Eggs in Propelyze?
								</h2>
								<div id="collapseNin" class="accordion-collapse collapse" aria-labelledby="Headingnin" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">Yes, Propelyze has hidden Easter eggs throughout the platform for you to discover. These fun surprises can unlock additional features or rewards. Keep exploring and interacting with different parts of the platform to find them. Enjoy the hunt!</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="Headingten">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
										<i class="fa fa-check-circle me-2"></i>What Should I Do if I Encounter Issues While Using Propelyze?
								</h2>
								<div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="Headingten" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">If you experience problems, start by refreshing the page to see if the issue resolves. If the problem persists, try clearing your browser’s cache. For continued issues, contact our support team for detailed assistance.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="Headingelev">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseElev" aria-expanded="false" aria-controls="collapseElev">
										<i class="fa fa-check-circle me-2"></i>How Frequently Is the Data Updated?
								</h2>
								<div id="collapseElev" class="accordion-collapse collapse" aria-labelledby="Headingelev" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">We update our data regularly to ensure it remains accurate and relevant. The frequency of updates can vary depending on the data source and type. Rest assured, we strive to provide the most current information available.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="Headingtwel">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwel" aria-expanded="false" aria-controls="collapseTwel">
										<i class="fa fa-check-circle me-2"></i>How Can I Contact Propelyze Support via Email?
								</h2>
								<div id="collapseTwel" class="accordion-collapse collapse" aria-labelledby="Headingtwel" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p class="mb-0">To contact Propelyze support via email, simply send your inquiry to support@propelyze.com. Our team aims to respond to all email queries within 24 hours. For faster assistance, please include detailed information about your issue or question in your email.</p>
									</div>
								</div>
							</div-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="reg" class="pt-5 pb-5 bg_blue">
		<div class="container-xl">
			<div class="reg_1 row">
				<div class="col-md-9">
					<div class="reg_1l">
						<h2 class="text-white">Become a Member</h2>
						<hr class="line">
						<p class="text-light mb-0"></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="reg_1r text-end mt-4">
						<h6 class="mb-0"><a class="bg-warning button" href="{{ url('/register')}}">Register Now</a></h6>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection