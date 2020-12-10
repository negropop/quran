@extends('app')
@section('content')
<div class="header">
    <div class="container">
            <div class="col-12">
                 <div class="row">
                    <button class="nav-toggle" type="button">
                        <span>
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </span>
                    </button>
               
                  
                    </div>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        </div>
    </div>
</div>
{{-- main --}}
<div class="main">
    <div class="container">
        <div class="row">    
            <div class="img floating">
                <div class="circle"></div>
                <img id="book" src="{{ asset('img/book.png') }}" alt="">
            </div>  
            <div  id="main-text" class="col-12 order-md-0 col-md-6 col-xl-5 col-xxl-4 align-self-center slider-text">
                <h1 id="head-text">  اهلا بك بمكتبه أياتي الرقميه</h1>
                <p>مكتبه أياتي هي مكتبه قرأنيه تحتوي على 
                  أيات مصحفنا الكريم واياتنا القرانيه واحديث رسولنا الكريم ص
                 </p>
              </div>
        </div>
      
        <div class="button">
            <a href="/explorer" id="explorer">إستكشاف</a>
        </div>
    </div>
</div>

    <div class="menuu" style="opacity: 0">
        <div class="container">
            <button class="nav-toggle" id="close" style="top: 0" type="button">
                <span>
                    <i class="fa fa-window-close" style="font-size: xx-large"></i>
                </span>
            </button>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <ul class="enu-list">
       <style>
           .enu-list li{    padding: 23px;}
       </style>
       <li><a href="/">الرئيسيه</a></li>
       <li><a href="/explorer">إستكشاف</a></li>
    </ul>
            </div>
 
            </div>
            <br>
            <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



        {{-- stats --}}
        <div class="container" id="cards">
          <div class="card-deck">
              <div class="card">
                 
                <img class="card-img-top" src="{{ asset('img/reader.png') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">عدد القراء</h5>
                  <p class="card-text">
                    {{$reader}}</p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="{{ asset('img/mp3.png') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">عددالسور</h5>
                  <p class="card-text">
                   {{$count}}</p>
                </div>
              </div>
           
              </div>
            </div>
      </div>
      <hr>
      
@endsection
