
@extends('FrontendUi.master')
@section('content')


<div class="slider" data-show="1" data-arrow="true">

<div>
    <div class="slider-item">
        <img src="{{asset('Frontimages/walpaperr.png')}}" alt="" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="slider-content" >
                        <h1 style="color: white; margin-top: -32%; font-size: 70px">“Support your claims with a short and powerful quote”
                        </h1>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
</div>


<section>
<div class="container">
    <div class="row">
        <h3 style="padding-left: 10%; text-decoration: underline;">BOARD MEMBERS</h3> 
        <div class="col-sm-3 col-xs-12" style="margin-top: 4%;">
            <div class="team-img">
                <img src="{{asset('Frontimages/abc.jpg')}}" class="circle-img" alt="team image">
            </div>
            <div class="team-line"></div>
        </div>
        <div class="col-sm-9 col-xs-12">
            <div class="team-info">
                <h3>MR MOHAN LAL SHARMA</h3>
                <h4 style="color: #cd1f26;">FOUNDER CHAIRMAN</h4>
                <p>The founder Chairman is the most Enthusiastic member of the Mahabir team and proves to be a true Leader.
                His positive Ideology is the ‘Success Mantra’ of the Organisation. He also leads numerous Social, Cultural and Religious Establishments.The city holds his name in all Social areas and the Market will always remember this Legacy after him !
                </p>
                <ul class="team-social">
                    <a href="#"><i class="icon ion-logo-linkedin"></i></a>
                    <a href="#"><i class="icon ion-logo-twitter"></i></a>
                    <a href="#"><i class="icon ion-ios-mail-open"></i></a>
                </ul>
            </div>
        </div>
    </div>
    <div class="industris-space-60"></div>
    <div class="row">
        <div class="col-sm-3 col-xs-12">
            <div class="team-img">
                <img src="{{asset('Frontimages/abc.jpg')}}" class="circle-img" alt="team image">
            </div>
            <div class="team-line"></div>
        </div>
        <div class="col-sm-9 col-xs-12">
            <div class="team-info">
                <h3>MR OM SHARMA</h3>
                <h4 style="color: #cd1f26;">DIRECTOR</h4>
                <p>Having a strong grip from the base growth of the Organisation, Mr. Om believes in advancing with Time.
                    From the very day of his joining, the Growth has nearly doubled up every year and all the areas such as Accounts, Sales, Marketing, Administration, etc. have adopted necessary tools to keep up with the fast pace in Global Business.
                    </p>
                <ul class="team-social">
                    <a href="#"><i class="icon ion-logo-linkedin"></i></a>
                    <a href="#"><i class="icon ion-logo-twitter"></i></a>
                    <a href="#"><i class="icon ion-ios-mail-open"></i></a>
                </ul>
            </div>
        </div>
    </div>

    <div class="industris-space-60"></div>
        <div class="row">
            <div class="col-sm-3 col-xs-12">
                <div class="team-img">
                    <img src="{{asset('Frontimages/abc.jpg')}}" class="circle-img" alt="team image">
                </div>
                <div class="team-line"></div>
            </div>
            <div class="col-sm-9 col-xs-12">
                <div class="team-info">
                    <h3>MR MAHESH SHARMA</h3>
                    <h4 style="color: #cd1f26;">DIRECTOR</h4>
                    <p>The Youngest Charismatic member of  Mahabir’s Generational service, Mr. Mahesh has kept keen interest in bringing new Ideas and Global Brands to the National market. 
                        He majorly believes in keeping the Standards up to required Corporate levels. 
                        Mahabir has witnessed a sense of Joy amongst his presence as he takes things easy with utmost care !
                        </p>
                    <ul class="team-social">
                        <a href="#"><i class="icon ion-logo-linkedin"></i></a>
                        <a href="#"><i class="icon ion-logo-twitter"></i></a>
                        <a href="#"><i class="icon ion-ios-mail-open"></i></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection