<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tobestic Hotel</title>

    <!-- bootstrap Css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <style>
        /*------home------*/
 .home{
    height: 100vh;
    color: #fff;
}

.home img{
    width: 100%;
    height: 100vh;
}

.home .text{
    position: absolute;
    top: 35%;
    left: 5%;
}

.home .text h1{
    font-size: 80px;
    font-family: serif;
    font-weight: 400;
}

.home p{
    margin: 20px 0;
}

.home button{
    margin-right: 20px;
}

.home .owl-nav .owl-prev,
.home .owl-nav .owl-next{
    position: absolute;
    top: 40%;
    height: 50px;
    width: 50px;
    background: rgba(0, 0, 0, 0.5) !important;
    color: #fff;
}

.home .owl-nav .owl-prev{
    left: 0;
}

.home .owl-nav .owl-next{
    right: 0;
} 
/*------home------*/

/*------about------*/
.left, .right{
    width: 50%;
    padding: 30px;
}

.top{
    margin-top: 80px;
}

.mtop{
    margin-top: 40px;
}

.heading h1{
    font-size: 100px;
    font-weight: 500;
    opacity: 0.1;
   font-size: serif;
    position: absolute;
   top: -30px;
}

.heading h2{
    margin: 30px 0;
    font-size: 45px;
    font-family: serif;
    font-weight: 400;
}

.about .heading h1{
    top: 55px;
}

.about{
    position: relative;
}

.about .left{
    margin-top: 30px;
}

.about p{
    font-size: 15px;
}

.about button{
    margin: 30px 0;
}

/*------about------*/

/*------counter------*/
/* .counter{
    background-image: url("../image/room3.jpeg");
    background-size: cover;
    background-repeat: no-repeat;
  
} */

/*------counter------*/

/*----rooms-----*/
.rooms .owl-nav .owl-prev,
.rooms .owl-nav .owl-next{
    position: absolute;
    top: -20%;
    height: 50px;
    width: 50px;
    background: #7fc142 !important;
}


.rooms .owl-nav .owl-prev i,
.rooms .owl-nav .owl-next i{
    color: #fff;
}
.rooms .owl-nav .owl-prev{
    left: 85%;
}

.rooms .owl-nav .owl-next{
    right: 5%;
}
/*-----rooms----*/


/*------gallery------*/
 .gallery{
    position: relative;
}

.gallery img{
    width: 100%;
    height: 100%;
}

.gallery .img{
    position: relative;
}

.gallery .img::after{
    content: '';
    position: absolute;
    top: 0;
    left:0;
    background: rgba(126, 193, 65, 0.86);
    width: 255px;
    height: 251px;
    z-index: 2;
    opacity: 0;
    transition: 0.5s;
}

 .overlay{
    position: absolute;
    top: 25%;
    left: 8%;
    z-index: 3;
    text-align: center;
    color: #000;
    opacity:0 ;
    transition: 0.5s; 
    font-size: 12px;
} 

.gallery span{
    width: 50px;
    height: 50px;
    line-height: 50px;
    border-radius: 50%;
    text-align: center;
    border: 2px solid white;
}

.overlay h3{
    margin-top: 20px;
    font-weight: 500;
}

.gallery .items:hover .overlay,
.gallery .items:hover .img::after{
    opacity: 1;
    cursor: pointer;
} 

.gallery .owl-nav .owl-prev{
    left: 85%;
}

.gallery .owl-nav .owl-next{
    right: 5%;
}

.gallery .owl-nav .owl-next,
.gallery .owl-nav .owl-prev{
    top: -40%;
}

/*------gallery------*/


/*--Services--*/
.services{
    position: relative;
}

.grid2{
    display: grid;
    grid-template-columns: repeat(2,1fr);
    grid-gap: 30px;
}

.services .left{
    padding: 30p 0;
}

.services .box{
    border: 1px solid rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: 0.5s;
    padding: 20px;
}

.services .box .text{
    padding: 30px 0;
    border: 1px dashed #fff;
}

.services i{
    font-size: 50px;
    color: #7fc142;
    transition: 0.5s;
}

.services h3{
    font-size: 20px;
    font-weight: 400;
    margin-top: 20px;
    transition: 0.5s;
}

.services img{
    width: 100%;
    height: 100%;
}

.services .box:hover{
    background: #7fc142;
    color: #fff;
    cursor:pointer;
}

.services .box:hover i{
    color: #fff;
}

.services .box:hover h3{
    color: #fff;
}
/*--Services--*/

/*--Customer--*/
.customer{
    background-image: url("image/room7.jpeg");
    background-size: cover;
    background-repeat: no-repeat;
   height: 70vh;
   width: 100%;
   text-align: center;
   color: #fff;
}

.customer .container{
    max-width: 70%;
}

.customer .item{
    padding: 10% 0;
}

.customer i{
    width: 100px;
    height: 100px;
    background: rgba(126, 193, 64, 0.57);
    line-height: 100px;
    border-radius: 50%;
    font-size: 50px;
    margin-bottom: 50px;
}

.customer p{
    line-height: 30px;
}

.customer h3{
    margin-top: 20px;
    color: #7fc142;
}

.customer span{
    font-size: 15px;
}

.owl-carousel2 .owl-dots{
    position: absolute;
    bottom: 70px;
    left: 46.6%;
}

.owl-carousel2 .owl-dots i{
    color: #7fc142;
}

.owl-carousel2 .owl-dots i:hover button{
    color: #7fc142 !important;
}

.owl-carousel2 span{
    border: 2px solid #fff;
    background: transparent !important;
}

.owl-carousel2 .active span{
    background: #7fc142 !important;
    border: 2px solid #7fc142;
}
/*--Customer--*/

/*------footer------*/
footer{
    background: #282834;
    color: #b6b7b9;
    padding: 8% 0 2% 0;
}

footer .grid{
    grid-template-columns: 6fr 2fr 4fr;
}

footer p{
    color: #b6b7b9;
    font-size: 15px;
    line-height: 25px;
}

footer .icon i{
    margin: 20px 0 20px 20px 0;
    color: #b6b7b9;
}

footer h2{
    color: #fff;
    margin-bottom: 10px;
}

footer li{
    margin-bottom: 20px;
}

footer i{
    color: #7fc142;
    margin: 20px 0;
    margin-right: 20px;
}

footer label{
    margin: 20px 0;
}

.legal{
    padding: 15px 0;
    background: #282834;
    color: #b6b7b9;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
}

/*------footer------*/

@media only screen and (max-width:768px){
.home{
    color: #fff;
    height: 50vh;
}

.home img{
    width: 60%;
    height: 50vh;
}

.left, .right{
    width: 100%;
}

.book h1{
    margin-bottom: 20px;
}

.container.flex,
.book .flex_space{
    flex-direction: column;
}

.book .grid{
    grid-template-columns: repeat(3, 1fr);
}

.counter .grid{
    grid-template-columns: repeat(2, 1fr);
}

.rooms .owl-carousel .owl-nav .owl-prev{
    left: 75%;
} 

.gallery .owl-nav .owl-prev{
    left: 75%;
} 

.rooms .owl-nav .owl-prev,
.rooms .owl-nav .owl-next{
    top: -20%;
}
.gallery .owl-nav .owl-prev,
.gallery .owl-nav .owl-next{
    top: -70%;
}

.services .flex_space{
    flex-direction: column;
}
.customer{
    height: 60vh;
}

.customer .container{
    max-width: 80%;
}

.owl-carousel2 .owl-dots{
    bottom: 0;
    left: 44.5%;
}

footer .grid{
    grid-template-columns: repeat(1,1fr);
}
}
    </style>
    
</head>
<body>

<header>
    <div class="content flex_space">
        <div class="logo">
            <img src="image/HAVILAH LOGO.png" alt="" width="100">
        </div>
        <div class="navlinks">
            <ul id="menulist">
                <li><a href="#home">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#rooms">rooms</a></li>
                <li><a href="#gallery">gallery</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#contact">contact</a></li>
                <li><i class="fa fa-search"></i></li>
                <li><button class="btn btn-success" type="button" name="button">BOOK NOW</button></li>
            </ul>
            <span class="fa fa-bars" onclick="menutoggle()"></span>
        </div>
    </div>
</header>


<script>
    var menulist = document.getElementById('menulist');
    menulist.style.maxHeight ="0px";


    function menutoggle() {
        if (menulist.style.maxHeight == "0px") {
            menulist.style.maxHeight ="100vh";
        }else{
            menulist.style.maxHeight ="0px";
        }
    }
</script>

<section class="home" id="home">
    <div class="content">
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div class="item">
                <img src="image/room.jpg" alt="">
                <div class="text">
                    <h1>Spend Your Holiday</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="flex">
                        <button class="primary-btn">READ MORE</button>
                        <button class="secondary-btn">CONTACT US</button>

                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/room1.jpeg" alt="">
                <div class="text">
                    <h1>Spend Your Holiday</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="flex">
                        <button class="primary-btn">READ MORE</button>
                        <button class="secondary-btn">CONTACT US</button>

                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/room3.jpeg" alt="">
                <div class="text">
                    <h1>Spend Your Holiday</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="flex">
                        <button class="primary-btn">READ MORE</button>
                        <button class="secondary-btn">CONTACT US</button>

                    </div>
                </div>
            </div>

            <div class="item">
                <img src="image/room4.jpg" alt="">
                <div class="text">
                    <h1>Spend Your Holiday</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="flex">
                        <button class="primary-btn">READ MORE</button>
                        <button class="secondary-btn">CONTACT US</button>

                    </div>
                </div>
            </div>

            <div class="item">
                <img src="image/room5.jpg" alt="">
                <div class="text">
                    <h1>Spend Your Holiday</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="flex">
                        <button class="primary-btn">READ MORE</button>
                        <button class="secondary-btn">CONTACT US</button>

                    </div>
                </div>
            </div>

            <div class="item">
                <img src="image/room6.jpeg" alt="">
                <div class="text">
                    <h1>Spend Your Holiday</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="flex">
                        <button class="primary-btn">READ MORE</button>
                        <button class="secondary-btn">CONTACT US</button>

                    </div>
                </div>
            </div>

            <div class="item">
                <img src="image/room7.jpeg" alt="">
                <div class="text">
                    <h1>Spend Your Holiday</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="flex">
                        <button class="primary-btn">READ MORE</button>
                        <button class="secondary-btn">CONTACT US</button>

                    </div>
                </div>
            </div>

            <div class="item">
                <img src="image/room8.jpg" alt="">
                <div class="text">
                    <h1>Spend Your Holiday</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="flex">
                        <button class="primary-btn">READ MORE</button>
                        <button class="secondary-btn">CONTACT US</button>

                    </div>
                </div>
            </div>

            <div class="item">
                <img src="image/room5.jpg" alt="">
                <div class="text">
                    <h1>Spend Your Holiday</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="flex">
                        <button class="primary-btn">READ MORE</button>
                        <button class="secondary-btn">CONTACT US</button>

                    </div>
                </div>
            </div>
            
        
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots: false,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>


<section class="book">
    <div class="container flex_space">
        <div class="text">
            <h1><span>Book</span> Your Rooms</h1>
        </div>
        <div class="form">
        <form class="grid">
            <input type="date" placeholder="Araival Date">
            <input type="date" placeholder="Departure Date">
            <input type="number" placeholder="Adults">
            <input type="number" placeholder="Children">
            <input type="submit" value="CHECK AVAILABILITY">
        </form>
        </div>
    </div>
</section>

<section class="about top" id="about">
    <div class="container flex">
        <div class="left">
            <div class="heading">
                <h1>WELCOME</h1>
                <h2>Havillah Hotel</h2>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
            <button class="primary-btn">ABOUT US</button> 
        </div>
        <div class="right">
            <img src="image/room6.jpeg" alt="" width="500px">
        </div>
    </div>
</section>

<!-- <section class="counter top">
    <div class="container grid">
        <div class="box">
                <h1>2500</h1>
                <hr>
                <span>Customer</span>
        </div>

        <div class="box">
                <h1>1250</h1>
                <hr>
                <span>Happy Customer</span>
        </div>

        <div class="box">
                <h1>150</h1>
                <hr>
                <span>Expert Technicians</span>
        </div>

        <div class="box">
                <h1>3550</h1>
                <hr>
                <span>Desktop Reaired</span>
        </div>
    </div>
</section> -->

<section class="rooms" id="rooms">
    <div class="container top">
        <div class="heading">
            <h1>EXPLORE</h1>
            <h2>Our Rooms</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
        </div>

        <div class="content mtop">
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div class="items">
                <div class="image">
                    <img src="image/room13.jpg" alt="">
                </div>
                <div class="text">
                    <h2>Studio Room</h2>
                    <div class="rate flex">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="button flex">
                        <button class="primary-btn">BOOK NOW</button>
                        <h3>$250 <span><br> Per Night</span></h3>
                    </div>
                </div>
            </div>

            <div class="items">
                <div class="image">
                    <img src="image/room8.jpg" alt="">
                </div>
                <div class="text">
                    <h2>1 Bed Charlet</h2>
                    <div class="rate flex">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="button flex">
                        <button class="primary-btn">BOOK NOW</button>
                        <h3>$250 <span><br> Per Night</span></h3>
                    </div>
                </div>
            </div>

            <div class="items">
                <div class="image">
                    <img src="image/room9.jpg" alt="">
                </div>
                <div class="text">
                    <h2>2 Bed Room</h2>
                    <div class="rate flex">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="button flex">
                        <button class="primary-btn">BOOK NOW</button>
                        <h3>$250 <span><br> Per Night</span></h3>
                    </div>
                </div>
            </div>

            <div class="items">
                <div class="image">
                    <img src="image/room10.jpg" alt="">
                </div>
                <div class="text">
                    <h2>3 Bed Room</h2>
                    <div class="rate flex">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="button flex">
                        <button class="primary-btn">BOOK NOW</button>
                        <h3>$250 <span><br> Per Night</span></h3>
                    </div>
                </div>
            </div>

            <div class="items">
                <div class="image">
                    <img src="image/room11.jpg" alt="">
                </div>
                <div class="text">
                    <h2>2 Bed Room</h2>
                    <div class="rate flex">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="button flex">
                        <button class="primary-btn">BOOK NOW</button>
                        <h3>$250 <span><br> Per Night</span></h3>
                    </div>
                </div>
            </div>

            <div class="items">
                <div class="image">
                    <img src="image/room12.jpg" alt="">
                </div>
                <div class="text">
                    <h2>2 Bed Room</h2>
                    <div class="rate flex">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="button flex">
                        <button class="primary-btn">BOOK NOW</button>
                        <h3>$250 <span><br> Per Night</span></h3>
                    </div>
                </div>
            </div>
            
            <div class="items">
                <div class="image">
                    <img src="image/room14.jpg" alt="">
                </div>
                <div class="text">
                    <h2>2 Bed Room</h2>
                    <div class="rate flex">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="button flex">
                        <button class="primary-btn">BOOK NOW</button>
                        <h3>$250 <span><br> Per Night</span></h3>
                    </div>
                </div>
            </div>

            <div class="items">
                <div class="image">
                    <img src="image/room15.jpeg" alt="">
                </div>
                <div class="text">
                    <h2>Studio Room</h2>
                    <div class="rate flex">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="button flex">
                        <button class="primary-btn">BOOK NOW</button>
                        <h3>$250 <span><br> Per Night</span></h3>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </div>
</section>

<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:40,
    nav:true,
    dots: false,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2,
            margin: 10,
        },
        1000:{
            items:3
        }
    }
})
</script>


<section class="gallery" id="gallery">
    <div class="container top">
        <div class="heading">
            <h1>PHOTOS</h1>
            <h2>Our Gallery</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        </div>
       </div>

        <div class="content mtop">
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div class="items">
                <div class="img">
                    <img src="image/room3.jpeg" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"></span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>

            <div class="items">
                <div class="img">
                    <img src="image/room4.jpg" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"></span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>

            <div class="items">
                <div class="img">
                    <img src="image/room5.jpg" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"></span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>

            <div class="items">
                <div class="img">
                    <img src="image/room6.jpeg" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"></span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>

            <div class="items">
                <div class="img">
                    <img src="image/room8.jpg" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"></span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>

            <div class="items">
                <div class="img">
                    <img src="image/room9.jpg" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"></span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>

            <div class="items">
                <div class="img">
                    <img src="image/room10.jpg" alt="">
                </div>
                <div class="overlay">
                    <span class="fa fa-plus"></span>
                    <h3>Photo Title Here.</h3>
                </div>
            </div>
        </div>
        </div>
    
</section>

<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots: false,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        768:{
            items:4,
        },
        1000:{
            items:6
        }
    }
})
</script>

<section class="services top" id="service">
    <div class="container">
    <div class="heading">
            <h1>SERVICES</h1>
            <h2>Our Services</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        </div>

        <div class="content flex_space">
            <div class="left grid2">
                <div class="box">
                    <div class="text">
                        <i class="fa-solid fa-champagne-glasses"></i>
                        <h3>Delious Food</h3>
                    </div>
                </div>

                <div class="box">
                    <div class="text">
                        <i class="fa-solid fa-person-biking"></i>
                        <h3>Fintness</h3>
                    </div>
                </div>

                <div class="box">
                    <div class="text">
                        <i class="fa-solid fa-utensils"></i>
                        <h3>Inhouse Restaurant</h3>
                    </div>
                </div>
            

            <div class="box">
                    <div class="text">
                        <i class="fa-solid fa-spa"></i>
                        <h3>Beauty Spa</h3>
                    </div>
                </div>
            
            </div>

            <div class="right">
            <img src="image/room10.jpg" alt="">
        </div>
   
        </div>
</section>

<!--  <section class="customer top">
    <div class="container">
    <div class="owl-carousel owl-carousel2 owl-theme">
    <div class="item">
        <i class="fa-solid fa-quote-right"></i>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  </p>
        <h3>Julia Robertson</h3>
        <label>Julia Robertson</label>
   
    </div>

    <div class="item">
        <i class="fa-solid fa-quote-right"></i>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  </p>
        <h3>Julia Robertson</h3>
        <label>Julia Robertson</label>
   
    </div>

    <div class="item">
        <i class="fa-solid fa-quote-right"></i>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
        <h3>Julia Robertson</h3>
        <label>Julia Robertson</label>
   
    </div>
    </div>
    </div>

</section>  -->

<!-- <script>
    $('.owl-carouse2').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1,
        },
        1000:{
            items:1
        }
    }
})
</script> -->

<footer>
    <div class="container grid" id="contact">
        <div class="box">
            <img src="image/HAVILAH LOGO.png" alt="" width="100">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>

            <div class="icon">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-instagram"></i>
            </div>
        </div>

        <div class="box">
            <h2>Links</h2>
            <ul>
                <li>Company History</li>
                <li>About Us</li>
                <li>Contact Us</li>
                <li>Services</li>
            </ul>
        </div>

        <div class="box">
            <h2>Contact Us</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
            <i class="fa fa-location-dot"></i>
            <label>1201 park street, Avenue Dhanmondy, Dhaka.</label><br>
            <i class="fa fa-phone"></i>
            <label>88 88 989 097</label> <br>
            <i class="fa fa-envelope"></i>
            <label>info@dentar.com</label> <br>
        </div>
    </div>
</footer>

<div class="legal">
    <p class="container"> Copyright (c) 2023 Copyright Holder All rights Reserved.</p>
</div>
<script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
   
</body>
</html>