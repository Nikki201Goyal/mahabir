@extends('FrontendUi.master')
@section('content')
<style>
		@media only screen and (min-width: 790px){
		.s2{
			background-color: #03132b;; margin-left: 20%; margin-right: 30%; margin-bottom: 50px; height: 720px; margin-top:-6%;

		}
		.card-header{
	  color: crimson;font-size: 25px; padding-left: 1%;
  }
		
	}
		@media only screen and ( max-width: 790px) and ( min-width: 560px){
  .s2{
	  height: 1500px;
	  background-color: #03132b;;   margin-bottom: 50px;
	  margin-top:-6%
	  
  }
  .card-header{
	  color: crimson;font-size: 20px; padding-left: 1%;
  }

  }
  @media only screen and ( max-width: 560px) and ( min-width: 470px){
  .s2{
	  height: 2000px;
	  background-color: #03132b;; width: 100%;  margin-bottom: 50px;
	  margin-top:-6%
  }
  .card-header{
	  color: crimson;font-size: 20px; padding-left: 1%;
  }

  }
  @media only screen and ( max-width: 470px) and ( min-width: 120px){
  .s2{
	  height: 1600px;
	  background-color: #03132b;; width: 100%;  margin-bottom: 50px;
	  margin-top:-6%
  }
  .card-header{
	  color: crimson;font-size: 15px; padding-left: 1%;
  }

  }
  	</style>

	<div class="slider" data-show="1" data-arrow="true">

<div>
	<div class="slider-item">
		<img src="{{asset('Frontimages/walpaper.png')}}" alt="" class="">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="slider-content">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



</div>



<section class="bg-contact-info">
	<div class="container">
		<div class="row">
			<h4 class="text-primary">CONTACT INFO</h4>
			<div class="col-md-6 col-sm-12">
				<ul class="topbar-left" style="margin-top: 3%;">
					<h3>Head Office</h3>
					<li><i style="color: #cd1f26;" class="icon ion-md-pin"></i>Dharan Road, Bargachhi Chowk, Biratnagar-4, Nepal</li>
					<li><i style="color: #cd1f26;" class="icon ion-md-mail"></i>mahabirauto@wlink.com.np</li>
					<li><i style="color: #cd1f26;" class="icon ion-md-call"></i>tel : 00977-021-460208, 460592</li>
					
				</ul>
				<div class="space-industris" style="height: 40px;"></div>
				<hr>
			</div>
			<div class="col-md-6 col-sm-12">
				<ul class="topbar-left" style="margin-top: 3%; ">
					<h3>Branch  Office</h3>
					<li><i style="color: #cd1f26;" class="icon ion-md-pin"></i>00977-01-4413002</li>
					<li><i style="color: #cd1f26;" class="icon ion-md-mail"></i>Sano Gaucharan, Naxal, Kathmandu, Nepal</li>
					<li><i style="color: #cd1f26;" class="icon ion-md-call"></i>mahabirautomobiles@gmail.com</li>
				
					
				</ul>
				
				<div class="space-industris" style="height: 40px;"></div>
				<hr>
			</div>
			<div class="col-md-12">
				<form class="form-contact" action="{{route('storeContact')}}" >
					<h3>Contact form</h3>
					<div class="row">
						<div class="col-md-4 form-group">
							<input type="text" name="name" id="your-name" class="form-control" placeholder="Your name" required>
						</div>
						<div class="col-md-4 form-group">
							<input type="number" name="phone" id="phone-number" class="form-control" placeholder="Phone number" required>
						</div>
						<div class="col-md-4 form-group">
							<input type="email" name="emailaddress" id="your-email" class="form-control" placeholder="Email Address" required>
						</div>
						<div class="col-md-12 form-group">
							<input type="text" name="subject" id="your-subject" class="form-control" placeholder="Subject" required>
						</div>
						
						<div class="col-md-12 form-group">
							<textarea type="text" rows="6" name="message" id="your-message" class="form-control" placeholder="your message" required></textarea>
						</div>
						<div class="col-md-12">
							<input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit btn btn-primary">
							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<h3>View map:</h3>
			<div class="col-md-12">
				
				
		
				
				<div>
					<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1GPP4-rX8fCB5tboGElwlgh-jV4KIndbu" width="100%" height="480"></iframe>
				</div>
				<div class="text-center" style="margin-top: 4%;">
					<a href="#" class="btn btn-primary btn-m-r">Get direction</a>
				
				</div>
				</div>
		</div>
	</div>
</section>
				

				

				<section class="s2" >
					<div class="card" style="width: 100rem; margin-top: -9%;">
						<div class="container" style="display: flex;">
							<div class="image">
								<img src="{{asset('Frontimages/dealer.png')}}">
							</div>
							<div class="card-header" >
								DEALERS LOCATION
							</div>
						</div>
					</div>


						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<ul class="list-group list-group-flush" style="color: white;  list-style-type: none;">
										<li class="list-group-item">
										<li class="list-group-items"> 1. BIDHAN AUTO PALACE PANCHTHAR - 9841912797</li>
										<li class="list-group-items">2. B. G. ENTERPRISES, BIRTAMOD – 023-541725</li>
										<li class="list-group-items">3. NEW LAXMI SUPPLIERS & TRADERS, DAMAK – 023-585895</li>
										<li class="list-group-item">4. B & G ENTERPRISES, URLABARI – 021-540987</li>
										<li class="list-group-item">5. PARAS AUTOMOBILES, ITAHARI – 025-587162</li>
										<li class="list-group-item">6. SHRESTHA AUTOMOBILES, DHARAN – 025-532329</li>
										<li class="list-group-item">7. MAA DAKNESHWORI ENTERPRISES PVT. LTD, RAJBIRAJ – 031-522560</li>
										<li class="list-group-item">8. RAJ AUTOMOBILES, LAHAN – 033-561724</li>
										<li class="list-group-item">9. MAA DURGA AUTOMOBILES, SIRAHA - 9842825940</li>
										<li class="list-group-item">10. MAA DURGA AUTOMOBILES, MIRCHAIYA - 9842825940</li>
										<li class="list-group-item">11. ARYAN AUTOMOBILES, JANAKPUR – 041-528791</li>
										<li class="list-group-item">12. JANAKI AUTO ENTERPRISES, BARDIBAS - 9854022307</li>
										<li class="list-group-item">13. RIYA ENTERPRISES, MALANGWA – 9854035820, 9854036160</li>
										<li class="list-group-item">14. GANAPATI AUTO & WORKS, CHANDRANIGAHPUR – 055-540776</li>
										<li class="list-group-item">15. S. K. BANIYA TRADE, HETAUDA - 9855068839</li>
										<li class="list-group-item">16. JAY BHOLE BABA ENG. & SALES, PARSA – 056-583793</li>
										<li class="list-group-item">17. CHITWAN TANDI AUTO LINK PVT. LTD., TANDI – 056-562013</li>
										<li class="list-group-item">18. AUTO SPEED, NARAYANGARH – 056-527256</li>
										<li class="list-group-item">19. R. K. AUTO, DHANGADHI - 9848415959</li>
										<li class="list-group-item">20. KALIKA TRADE SUPPLIERS, TIKAPUR - 9848425849</li>
										<li class="list-group-item">21. MAHAMAYA TRADE & SUPPLIERS, MAHENDRANAGAR - 9858750148></li>
										<li class="list-group-item">22. SAGARMATHA AUTOMOBILES, BUTWAL - 071-438329, 9857024412</li>
										<li class="list-group-item">23. BIR AUTOWAYS, POKHARA – 9856031056, 9856029582</li>
										<li class="list-group-item">24. MAHALAXMI AUTOMOBILES, NARAYANGHAD - 9802910943</li>
										
									  </ul>

								</div>
							</div>
							</div>
						
			

					</section>
        @endsection