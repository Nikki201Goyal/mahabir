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
		<div class="row" style="margin-top: -5%;">
			<div class="col-md-7 col-sm-12">
				<h4 class="text-primary">OVERVIEW</h4>
				<h2>Automobiles Served</h2>
				<p style="text-align: justify;">We, MAHABIR AUTOMOBILES and our subsidiaries, take initiative to contribute to harmonious and sustainable development of society and the earth through all business activities that we carry out in each region and cities, based on our Guiding Principals. 
				<br style="text-align: justify;">That's why we look for new ways to use our expertise in the energy automobiles, discover new opportunities and promote innovation around the world. Our ambition is to become the world's most efficient automobiles solutions and services provider.We, MAHABIR AUTOMOBILES and our subsidiaries, take initiative to contribute to harmonious and sustainable development of society and the earth through all business activities that we carry out in each region and cities, based on our Guiding Principals. </p>
				<br>
				
			</div>
			<div class="col-md-5 col-sm-12 sm-center">
				<div class="industris-space-sm"></div>
				<img src="{{asset('Frontimages/mg6.png')}}" alt="">
			</div>
		</div>
	</div>
</section>
<section class="bg-primary">
		<div class="container">
			<h4 style="color: white;">OUR PRODUCTS</h4>
			<h2 style="color: white;">What we provide</h2>
			<div class="industris-space-30"></div>
			<div class="row">
				@if($items->count()<= 0)
			<div>	<h3>No items Updated</h3></div>
				@else
			@foreach($items as $itm)
				<div class="col-md-4 col-sm-6">
					<div class="services-box">
						<div class="services-icon">
							<img src="{{asset($itm->image)}}" alt="" style="width:100%; height:450%">
						</div>
						<div class="services-content">
							<h3>{{$itm->name}}</a></h3>
							<p>{{$itm->description}}</p>
							<div class="slider-content" style=" margin-top: 9%;" >
							<h4 style="color: #707070;"> $250</h4>
							<a class="btn btn-primary" style="color: white; font-size: 15px; padding: 10px; " href="{{route('book')}}">Inquiry</a>
						</div>
						</div>
					</div>
				</div>
				@endforeach
				@endif
				
				
			
			
			</div>
		</div>
	</section>

@endsection