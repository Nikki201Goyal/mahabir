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

<section class="no-padding-bottom" >
<div class="container">
  <div class="row">
    <div class="col-md-12" style="margin-top: -5%;">
      <h4 class="text-primary">OUR PRODUCTS</h4>
      <h2>What we provide</h2>
      <div class="industris-space-30"></div>

      <div class="services-block-left">
        <div class="services-slider-img-left">
          <img src="/images/premier.jpg')}}" alt="">
        </div>
      </div>

      <div class="services-slider" data-show="3" data-arrow="true">

        <div class="services-item">
          <div class="services-box">
            <div class="services-icon">
              <img src="{{asset('Frontimages/mg2.png')}}" alt="">
            </div>
            <div class="services-content">
              <h3><a href="">MG</a></h3>
              <p style="text-transform: lowercase; justify-content:space-around">MG is a British automotive marque founded by Cecil Kimber in the 1920s, and M.G. Car Company Limited was the British sports car manufacturer that made the marque famous.</p>
              <a class="btn btn-primary" style="color: white; font-size: 15px; padding: 5px;  " href="{{route('book')}}">Buy Now</a>
            </div>
          </div>
        </div>

        

        <div class="services-item">
          <div class="services-box">
            <div class="services-icon">
              <img src="{{asset('Frontimages/mahindra.jpg')}}" alt="">
            </div>
            <div class="services-content">
              <h3><a href="services-detail.html">SWARAJ
                TRACTOR</a></h3>
              <p style="text-transform: lowercase; justify-content:space-around">THE SWARAJ BRAND HAS A RICH HISTORY EMERGING FROM THE SPIKE IN THE DEMAND FOR TRACTORS DURING THE GREEN REVOLUTION OF THE MID-SIXTIES. THE CENTRAL MECHANICAL ENGINEERING RESEARCH INSTITUTE (CMERI).</p>
              <a class="btn btn-primary" style="color: white; font-size: 15px; padding: 5px;  " href="{{route('book')}}">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="services-item">
          <div class="services-box">
            <div class="services-icon">
              <img src="{{asset('Frontimages/hitachi2.jpg')}}" alt="">
            </div>
            <div class="services-content">
              <h3><a href="services-detail.html">HITACHI</a></h3>
              <p style="text-transform: lowercase; justify-content:space-around">Hitachi was founded in 1910. Hitachi is listed on the Tokyo Stock Exchange and Nagoya Stock Exchange and its Tokyo listing is a constituent of the Nikkei 225 and TOPIX Core30 indices.</p>
              <a class="btn btn-primary" style="color: white; font-size: 15px; padding: 5px;  " href="{{route('book')}}">Buy Now</a>
            </div>
          </div>
        </div>


        <div class="services-item">
          <div class="services-box">
            <div class="services-icon">
              <img src="{{asset('Frontimages/renault7.png')}}" alt="">
            </div>
            <div class="services-content">
              <h3><a href="services-detail.html">RENAULT</a></h3>
              <p style="text-transform: lowercase; justify-content:space-around">The Renault company is an engine and vehicle manufacturer with its products spread across commercial sedans/passenger cars, SUVs, crossover SUVs, MPVs/ MUVs, hatchbacks. </p>
              <a class="btn btn-primary" style="color: white; font-size: 15px; padding: 5px;  " href="{{route('book')}}">Buy Now</a>
            </div>
          </div>
        </div>
          

      </div>

    </div>
  </div>
</div>
<div class="industris-space-90"></div>
</section>

<section class="bg-primary no-padding">
<div class="">
  <div class="flex-row" >
    <div class="video-section-left" style="background-image:url('{{asset('Frontimages/ourstory.png')}}')">
      <div class="home-video video-player">
        <a class="video-play" href="https://www.youtube.com/watch?v=qTH4tqEdZk8&t=11s"><i class="icon ion-md-play"></i></a>
      </div>
    </div>
    <div class="video-section-right">
      <div class="block-right" style="color: white";>
        <h4 style="color: white;">OUR STORY</h4>
        <h2 style="color: white;">Connecting things, <br> It’s all about people.</h2>
        <p style="text-align: justify;">Our Company, MAHABIR AUTOMOBILES is a just a few years has made a lot of achivements, so we can fairly say that we are building a strong and dynamically developing company, its transparency and strict fulfilling of obligations may become a good example of cooperation for any company. In more than 25 years MA has built up a wealth of knowledge and expertise in products and their applications, markets, suppliers and distributions. These core competences have enabled MA to develope a second role, that of logistic specialist. 



          </a></p>
        <img src="" alt="">
        <div class="row">
          <div class="col-md-offset-1 col-md-11 no-padding-sm-left">
            <div class="about-author">
              <div class="about-author-info">
                <p>MOHAN LAL SHARMA</p>
                <p>CEO, Founder</p>
              </div>
              <div class="about-author-media" 
              
              >
                <a style="color: white;" href="#"><i class="icon ion-logo-linkedin"></i></a>
                <a style="color: white;" href="#"><i class="icon ion-logo-twitter"></i></a>
                <a style="color: white;" href="#"><i class="icon ion-logo-skype"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>





<div class="container">
  <div class="row flex-row">
    <div class="col-md-6 align-self-center">
      <h3>Recruitment</h3>
      <p > We are looking for smart individuals who want to have a positive impact on our company. If that’s you, visit our Careers page or send us a <br> CV at: mahabirauto@wlink.com.np<a class="text-second" href="#"> </a></p>
      <div class="industris-space-30"></div>
      <a  href="carrer.html" class="btn btn-primary btn-m-r">Join us</a>
      <a href="team.html" class="btn btn-border">Our team</a>
      <div class="industris-space-sm"></div>
    </div>
    <div class="col-md-6">
      <img src="{{asset('Frontimages/recuirtment.png')}}" alt="home image">
    </div>
  </div>
</div>

<div class="container">
  <div class="industris-space"></div>
  <hr>
  <div class="industris-space"></div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Get a quote</h3>
      <p>As fellow entrepreneurs, we understand the need for space which gives your business room to breathe and grow.</p>
    </div>
  </div>
  <div class="industris-space-30"></div>
  <form class="home-form" method="post" action="">
    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your name" required>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="email" name="email" class="form-control" id="email" placeholder="Email address" required>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone number" required>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <button type="submit" style="color: white;" class="wpcf7-form-control wpcf7-submit btn btn-primary btn-full-width">Submit now <i class="icon ion-md-checkmark-circle"></i></button>
        </div>
      </div>
    </div>
  </form>
</div>

</section>

<section class="bg-default">
<div class="container">
  <div class="row flex-row">
    <div class="col-md-8">
      <h4 class="text-primary" style="font-size: 30px; text-transform: uppercase; color: white;">About </h4>
      <h2 class="text-white no-margin-bottom"></h2>
    </div>
    
  </div>
  <div class="industris-space-20"></div>

  <div class="row">
    <div class="col-md-12">
      
      <div class="project-feature-slider project-feature" data-show="3" data-arrow="true">

        <div class="project-item col-lg-4 col-sm-6">
          <div class="inner">
            <img src="{{asset('Frontimages/social contribution.png')}}" alt=""> 
            <div class="project-info">
              <div class="project-meta"></div>
              <div class="project-content">
                <h3 ><a style="color: #cd1f26;" href="">SOCIAL CONTRIBUTIONS</a></h3>
                <p>We aim of growth is in harmony with the environment by seeking to minimize the environment impact of our business operations, such as by working to reduce the effect of our operations on climate change and biodiversity. </p>
              
              </div>
            </div>
          </div>
        </div>

        




        <div class="project-item col-lg-4 col-sm-6">
          <div class="inner">
            <img src="{{asset('Frontimages/customer.png')}}" alt=""> 
            <div class="project-info">
              <div class="project-meta"></div>
              <div class="project-content" >
                <h3><a style="color: #cd1f26;" href="">CUSTOMER</a></h3>
                <p >Based on our philosophy of " Customer First ", we develope and provide innovative, safe and outstanding high quality products and services that meet a wide varity of customers' demands to enrich the lives of people.

                  </p>
                
              </div>
            </div>
          </div>
        </div>

        <div class="project-item col-lg-4 col-sm-6">
          <div class="inner">
            <img src="{{asset('Frontimages/employes.png')}}" alt=""> 
            <div class="project-info">
              <div class="project-meta"></div>
              <div class="project-content">
                <h3><a style="color: #cd1f26;" href="">EMPLOYEE</a></h3>
                <p>We respect our employees and belive that the sucess of our business is led by each individual's creativity and good teamwork. We stimulate personal growth for our employees.

                  We suppoer equal employment oppertunities.</p>
              
              </div>
            </div>
          </div>
        </div>

      <div class="project-item col-lg-4 col-sm-6">
          <div class="inner">
            <img src="{{asset('Frontimages/about2.png')}}" alt=""> 
            <div class="project-info">
              <div class="project-meta"></div>
              <div class="project-content">
                <h3><a style="color: #cd1f26;"  href="">ABOUT US</a></h3>
                <p style="justify-content: space-around;">Based on our philosophy of " Customer First ", we develope and provide innovative, safe and outstanding high quality products and services that meet a wide varity of customers' demands to enrich the lives of people.

                  </p>
                
              </div>
            </div>
          </div>
        </div>

        <div class="project-item col-lg-4 col-sm-6">
          <div class="inner">
            <img src="{{asset('Frontimages/environmnet.png')}}" alt=""> 
            <div class="project-info">
              <div class="project-meta"></div>
              <div class="project-content">
                <h3><a style="color: #cd1f26;" href="">ENVIRONMENT</a></h3>
                <p>We aim of growth is in harmony with the environment by seeking to minimize the environment impact of our business.</p>
                
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="industris-space-90"></div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <h3 class="text-white">Our work process</h3>
    </div>
    <div class="col-md-9">
      <p class="text-white border-left">Over the course of more than 25 years of hard work with many large and small projects. We have worked out the best working process.</p>
    </div>
  </div>
  <div class="industris-space"></div>

  <div class="row">
    <div class="col-md-3">
      <div class="process process-light">
        <div class="process-icon"><i class="icon ion-ios-briefcase"></i></div>
        <h4>Receive and Evaluate<br> the Customer overview</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="process process-light">
        <div class="process-icon"><i class="icon ion-md-football"></i></div>
        <h4>Research and<br> detailed planning</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="process process-light">
        <div class="process-icon"><i class="icon ion-ios-rocket"></i></div>
        <h4>Deploy and complete<br> the overview</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="process process-light">
        <div class="process-icon"><i class="icon ion-ios-filing"></i></div>
        <h4>Evaluation and<br> overview handover</h4>
      </div>
    </div>
  </div>

</div>
</section>

<section>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4 class="text-primary">CLIENTS</h4>
      <h2>What our customers say</h2>

      <div class="testi-slider" data-show="2" data-arrow="true">

        <div>
          <div class="testi-box">
            <div class="testi-content">
              <p>“I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment.”</p>
            </div>
            <div class="testi-info">
              <img src="https://via.placeholder.com/90x90.png" alt="" class="circle-img">
              <h4>Rosni karki<span>Mahabir Automobile Company</span></h4>
            </div>
          </div>
        </div>

        <div>
          <div class="testi-box">
            <div class="testi-content">
              <p>"A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart."</p>
            </div>
            <div class="testi-info">
              <img src="https://via.placeholder.com/90x90.png" alt="" class="circle-img">
              <h4>Nikki Goyal<span>Mahabir Automobile Company</span></h4>
            </div>
          </div>
        </div>

        <div>
          <div class="testi-box">
            <div class="testi-content">
              <p>"I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine."</p>
            </div>
            <div class="testi-info">
              <img src="https://via.placeholder.com/90x90.png" alt="" class="circle-img">
              <h4>Diggaj Chaudhary<span>Mahabir Automobile Company</span></h4>
            </div>
          </div>
        </div>

        <div>
          <div class="testi-box">
            <div class="testi-content">
              <p>"I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now."</p>
            </div>
            <div class="testi-info">
              <img src="https://via.placeholder.com/90x90.png" alt="" class="circle-img">
              <h4>Nikhil Agrawal<span>Mahabir Automobile Company</span></h4>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</section>
@endsection