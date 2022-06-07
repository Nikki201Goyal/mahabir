@extends('FrontendUi.master')
@section('content')
		<div class="slider" data-show="1" data-arrow="true">

<div>
	<div class="slider-item">
		<img src="{{asset('Frontimages/walpaper.png')}}" alt="" class="">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="slider-content" >
					   
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
</div>

<section>
	<div class="container">
		<div class="row flex-row" style="margin-top: -6%;">
			<div class="col-sm-7 col-xs-12">
				<h4 class="text-primary">LETS GET TOUCH IN</h4>
				<h2>You want to accompany us</h2>
				<p>We are looking for smart individuals who want to have a positive impact on the world. If that’s you, visit our Careers page or send us a <br><a class="text-second" href="#">CV at:mahabirauto@wlink.com.np</a></p>
				<br>
			</div>
			<div class="col-sm-5 col-xs-12 align-self-center text-right text-mb-left">
				
				<div class="industris-space-xs"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-sm-12">
				<h3>Parental leave for employees</h3>
				<p>All employees in our group now qualify for paid parental leave. Our new policy allows 16 weeks of paid leave for all employees having children.</p>

				<p>“Giving both parents time to bond with a new child is a contribution towards providing more flexibility and support to employees and ensures a good start with a new family member. We are delighted to offer this opportunity to all employees in company as part of our benefits package,” says Magne André Hovden, senior vice president for corporate people and leadership. <br>Entitlement to paid parental leave currently differs from country to country, based on legal entitlements and company benefits. They are often a mix of state/social security entitlements and company benefits. The company parental leave benefit will be combined with any entitlements from social security/insurance schemes or equivalent in the employment country.</p>

				
				<div class="industris-space-xs"></div>
			</div>
			<div class="col-md-4 col-sm-12">
				<img src="{{asset('Frontimages/car.png')}}" alt="">
			</div>
		</div>
	<div class="industris-space"></div>
	<hr>
	<div class="industris-space"></div>
	<div class="row flex-row">
		<div class="col-sm-8 col-xs-12">
			<h4 class="text-primary">Find job</h4>
			<h2 class="no-margin-bottom">Automobiles Job</h2>
		</div>
	
	</div>
	<div class="row">
	@foreach($carrer as $carr)
		<div class="col-md-12">
		<div class="industris-space-50"></div>
			<div class="career-box">
				<h3>{{$carr->name}}</h3>
				<h4>Descriptions:</h4>
				<p>{{$carr->description}}</p>
				<h4>Responsibilities:</h4>
				<p>{{$carr->responsibilities}}</p>
				<div class="industris-space-30"></div>
				<a href="{{route('applyNow')}}" class="btn btn-primary">Apply Now</a>
			</div>
			
		</div>
		@endforeach
	</div>
	</div>
</section>
        @endsection