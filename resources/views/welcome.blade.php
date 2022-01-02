<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
                margin: 0;
                padding:0;
                box-sizing:inherit;
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
               

               
            }

            .content{
                box-sizing:border-box;
                display:grid;
                place-content:center
            }
            .gallery{
                display:grid;
                grid-template-columns:repeat(8,1fr);
                grid-template-rows:repeat(7,10vw);
                grid-gap:10px;
                padding:10px;
            }
            @media screen and (max-width:767px){
                .gallery{
                display:grid;
                grid-template-columns:repeat(8,1fr);
                grid-template-rows:repeat(7,18vw);
                grid-gap:10px;
                padding:10px;
            }
            }
            @media (min-width: 768px) and (max-width: 991px) {
                .gallery{
                display:grid;
                grid-template-columns:repeat(8,1fr);
                grid-template-rows:repeat(7,20vw);
                grid-gap:10px;
                padding:10px;
            }
            }
            

            .gallery__img{
                width:100%;
                height:100%;
                display:block;
                object-fit:cover;
                border:1px solid #FEC514
            }

            .gallery-item--1
                {
                    grid-row: 1 / span 2;
                    grid-column: 1 / span 2;
                }

            .gallery-item--2
                {
                    grid-row: 1 / span 3;
                    grid-column: 3 / span 3;
                }

            .gallery-item--3
                {
                    grid-row: 1 / span 2;
                    grid-column: 6 / 7;
                }
            .gallery-item--4
                {
                    grid-row: 1 / span 2;
                    grid-column: 7 / -1;
                }
            .gallery-item--5
                {
                    grid-row: 3 / span 3;
                    grid-column: 1 /  span 2;
                }
            .gallery-item--6
                {
                    grid-row: 4 / span 2;
                    grid-column: 3 / span 2;
                }
            .gallery-item--7
                {
                    grid-row: 4 / 5;
                    grid-column: 5 / 6;
                }
            .gallery-item--8
                {
                    grid-row: 3 / span 2;
                    grid-column: 6 / span 2;
                }
            .gallery-item--9
                {
                    grid-row: 3 / span 3;
                    grid-column: 8 / -1;
                }
            .gallery-item--10
                {
                    grid-row: 6 / span 2;
                    grid-column: 1 / 2 ;
                }
            .gallery-item--11
                {
                    grid-row: 6 / span 2;
                    grid-column: 2 / span 2;
                }
            .gallery-item--12
                {
                    grid-row: 6 / span 2;
                    grid-column: 4 / 5;
                }
            .gallery-item--13
                {
                    grid-row: 5 / span 3;
                    grid-column: 5 /  span 3;
                }
            .gallery-item--14
                {
                    grid-row: 6 / span 2;
                    grid-column: 8 /  -1;
                }
          

           
            .full-height {
                height: 100vh;
            }

            .links  {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            /* .content {
                text-align: center;
            } */

            /* .title {
                font-size: 84px;
            } */

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
/* 
            .m-b-md {
                margin-bottom: 30px;
            } */
            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
           <div class="container">

           <div class="gallery">
               <figure class="gallery-item gallery-item--1">
                    <img src="assets/alhams/1.png" alt="" class="gallery__img">
               </figure>
               <figure class="gallery-item gallery-item--2">
                    <img src="assets/alhams/2.png" alt="" class="gallery__img">
               </figure>
               <figure class="gallery-item gallery-item--3">
                    <img src="assets/alhams/3.jpg" alt="" class="gallery__img">
               </figure>
               <figure class="gallery-item gallery-item--4">
                    <img src="assets/alhams/10.jpg" alt="" class="gallery__img">
               </figure>
               <figure class="gallery-item gallery-item--5">
                    <img src="assets/alhams/5.jpg" alt="" class="gallery__img">
               </figure>
               <figure class="gallery-item gallery-item--6">
                    <img src="assets/alhams/6.jpg" alt="" class="gallery__img">
               </figure>
               <figure class="gallery-item gallery-item--7">
                    <img src="assets/alhams/7.png" alt="" class="gallery__img">
               </figure>
               <figure class="gallery-item gallery-item--8">
                    <img src="assets/alhams/8.png" alt="" class="gallery__img">
               </figure>
               <figure class="gallery-item gallery-item--9">
                    <img src="assets/alhams/9.png" alt="" class="gallery__img">
               </figure>
               <figure class="gallery-item gallery-item--10">
                    <img src="assets/alhams/10.jpg" alt="" class="gallery__img">
               </figure>
               <figure class="gallery-item gallery-item--11">
                    <img src="assets/alhams/5.jpg" alt="" class="gallery__img">
               </figure>
               <figure class="gallery-item gallery-item--12">
                    <img src="assets/alhams/3.jpg" alt="" class="gallery__img">
               </figure>
               <figure class="gallery-item gallery-item--13">
                    <img src="assets/alhams/7.png" alt="" class="gallery__img">
               </figure>
               <figure class="gallery-item gallery-item--14">
                    <img src="assets/alhams/10.jpg" alt="" class="gallery__img">
               </figure>
             
           </div>
           </div>
            

            
           
        </div>
    </body>
</html>
