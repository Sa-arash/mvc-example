<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<!--ICONIFY-->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<!--PLUGIN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

</head>
<style>
    /***************************
    CUSTOM SCROLL BAR
****************************/
*, html{
    scroll-behavior: smooth;
}

*, *:after, *:before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

:root{
    --white:#FFF;
    --black:#000;
    --dark:#232323;
    --lite:#d6dee1;
    --gray:rgba(1,1,1,0.4);
    --primary:#f95c39;
    --secondary:#0d1d37;
    --default_font:'Poppins', sans-serif;
    --title_font:'Poppins', sans-serif;
}

::-webkit-scrollbar {
    height: 12px;
    width: 0px;
    background: var(--dark);
}

::-webkit-scrollbar-thumb {
    background: gray;
    -webkit-box-shadow: 0px 1px 2px var(--dark);
}

::-webkit-scrollbar-corner {
    background: var(--dark);
}





/***************************
            DEFAULT
****************************/
body{
    margin:0;
    overflow-x:hidden !important;
    font-family: var(--default_font);
    background-color:#f3f3f3;
}

a{
    text-decoration:none !important;
    min-width: fit-content;
    width: fit-content;
    width: -webkit-fit-content;
    width: -moz-fit-content;
}

a:hover, .active, .active_sub_link, .btn{
    opacity:1;
}

em{
    font-style:normal;
    color:var(--primary);
}

figure{
    padding:0;
    margin:0;
    pointer-events:none;
}

figure img{
    width:100%;
    height:100%;
}

a, p, .btn{
    font-size:15px;
    transition:0.5s;
}

p{
    line-height:1.9em;
    opacity:0.6;
}

a, button, input, textarea, select{
    outline:none !important;
}

fieldset{
    border:0;
}

ul{
    padding:0;
    margin:0;
}

li{
    list-style:none;
}

.title, .sub_title{
    font-family:var(--title_font);
    font-weight:700;
}

.flex, .fixed_flex{
    display:flex;
}

.flex_content{
    width:100%;
    position:relative;
}

.grid{
    display:grid;
}

.padding_1x{
    padding:1rem;
}

.padding_2x{
    padding:2rem;
}

.padding_3x{
    padding:3rem;
}

.padding_4x{
    padding:4rem;
}

.big{
    font-size:2.5em;
}

.medium{
    font-size:2em;
}

.small{
    font-size:1.2em;
}

.divisions{
    position:relative;
}

.title_header{
    margin:auto;
    text-align:center;
    width:60%;
}

.ball{
    position:relative;
}

.ball:before{
    content:"";
    border-radius:50%;
    background-color:rgba(1,1,1,0.2);
    position:absolute;
    left:0;
    top:30%;
    width:30px;
    height:30px;  
    transform:translate(-50%, -50%);
}

.link-tag{
    position:relative;
}

.link-tag:before{
    content:"\f0da";
    font-family:"FontAwesome";
    margin-right:5px;
    transition:0.5s;
    color:var(--primary_dark);
}

.link-tag:hover:before{
    margin-right:10px;
    color:inherit;
}

.link-tag:hover{
    color:var(--primary);
}

.buttons{
    align-items:center;
}

.buttons .btn:not(:last-child){
    margin-right:10px;
}

.btn{
    padding:0.6rem 1rem;
    border-radius:40px;
    border:0;
}

.btn_1{
    background-color:var(--primary);
    color:var(--white);
}

.btn_1:hover{
    opacity:0.7;
}

.btn_2{
    background-color:transparent;
    color:var(--white);
    border:1px solid var(--primary);
}

.btn_2:hover{
    background-color:var(--primary);
}

@media (max-width:1000px){
     .big{
        font-size:1.6em;
    }
    
    .medium{
        font-size:1.3em;
    }
    
    .small{
        font-size:1em;
    }
    
    .btn{
        padding:0.5rem 1rem;
    }
    
    a, p, .btn{
        font-size:12px;
    }
}

@media (max-width:620px){
    .flex{
        flex-wrap:wrap;
    }
    
    .padding_1x, .padding_2x, .padding_3x, .padding_4x{
        padding:1rem;
    }
    
    .btn_3:before{
        width:40px;
        height:40px;
    }
    
    .title_header{
        width:100%;
    }
}



/***************************
                    NAV
****************************/
nav{
    width:100%;
    padding:1rem 3rem;
    position:fixed;
    z-index:9;
    background-color:transparent;
    color:var(--white);
    align-items:center;
    justify-content:space-between;
    transition:0.5s;
}

.logo{
    max-width:200px;
    font-weight:700;
    margin:0;
    padding:0;
}

nav a{
    position:relative;
    color:inherit;
    opacity:0.7;
    margin:0 1.5rem;
}

nav a b{
    font-weight:300;
}

nav li .active:after, nav li:not(:last-child) a:after{
    content:"";
    position:absolute;
    left:0;
    width:0;
    bottom:-0.5rem;
    height:2px;
    background-color:var(--white);
    transition:0.5s;
}

nav li .active:after, nav li:not(:last-child) a:hover:after{
    width:100% !important;
}

nav select{
    background-color:transparent;
    border:1px solid var(--white);
    color:var(--white);
    padding:0.3rem;
    border-radius:5px;
}

.lang{
    padding:0.3rem;
    border:2px solid var(--white);
    border-radius:5px;
    align-items:center;
    justify-content:center;
}

nav li:not(:last-child) a iconify-icon{
    display:none !important;
}

@media (max-width:920px){
    .nav_links{
        align-items:center;
        justify-content:space-between;
        width:100%;
        position:fixed;
        bottom:0;
        left:0;
        background-color:var(--dark);
        padding:0 1rem;
        box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
        transition:0.5s;
    }
    
    nav li:not(:last-child) a iconify-icon{
        display:block !important;
        font-size:2.5em;
    }
    
    nav li:not(:last-child) a b{
        display:none !important;
    }
}


/***************************
                   FOOTER
****************************/
footer{
    flex-wrap:wrap;
    justify-content:center;
    text-align:center;
    width:100%;
    background-color:var(--dark);
    color:var(--white);
}

footer .logo, footer .links, footer hr, footer .sub_footer{
    flex:1 1 100%;
}

footer .links{
    margin:auto;
    align-items:center;
    justify-content:center;
}   

footer .links li{
    margin:0 1.5rem;
}

footer a{
    color:var(--white);
    opacity:0.7;
}

footer hr{
    opacity:0.2;
}

footer .sub_footer{
    align-items:Center;
    justify-content:space-between;
    font-size:12px;
    color:var(--lite);
}



/***************************
              ADDITIONAL
****************************/
.overlay{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background-color:var(--gray);
    z-index:99;
}




/***************************
                  HEADER
****************************/
header{
    position:relative;
    width:100%;
    height:100vh;
    color:var(--white);
}

.carousel{
    width:100%;
    height:100%;
    position:relative;
}

.carousel:after{
    content:"";
    width:100%;
    height:100%;
    position:absolute;
    top:0;
    left:0;
    background:linear-gradient(to bottom, rgba(1,1,1,0.8) 10%, rgba(1,1,1,0.4) 50%, rgba(1,1,1,0.2) 100%);
    z-index:1;
}

.carousel img{
    object-fit:cover;
    object-position:bottom;
}

.carousel_count{
    position:absolute;
    bottom:1rem;
    left:0rem;
    align-items:center;
    z-index:1;
    pointer-events:none;
}

ol li, ul li{
    position:relative;
}

.carousel_count li{
    margin:0 0.4rem;
    position:relative;
    opacity:0.7;
}

.carousel_count .active{
    margin-right:4rem;
   opacity:1;
   transform:scale(1.3);
   transition:0.5s;
   animation: bright 1s linear;
}

.carousel_count .active:after{
    content:"";
    position:absolute;
    left:2.5em;
    top:50%;
    transform:translate(-50%, 0);
    width:30px;
    height:1px;
    background-color:var(--white);
    transition:0.5s;
}

.carousel_arrows{
    position:absolute;
    z-index:1;
    bottom:0;
    right:0;
}

.carousel_arrows a{
    color:var(--dark);
    padding:1rem;
    background-color:var(--lite);
    align-items:center;
    justify-content:center;
    opacity:0.7;
}

@media (max-width:1020px){
    header{
        height:60vh;
    }
    
    .carousel_count{
        bottom:0rem;   
        left:-1rem;     
        font-size:12px;
    }
}



/***************************
                 MAIN
****************************/
/*DIVISION_1*/
.division_1{
    background-color:var(--dark);
    color:var(--white);
}


/*DIVISION_2*/
.division_2 .title_header .bar{
    margin:20px auto;
}

.division_2 .cards{
    flex-wrap:wrap;
    flex-direction: row;
    justify-content:center;
}

.card{
    align-items:center;
    background-color:var(--white);
    color:var(--dark);
    border:1px solid var(--gray);
    border-radius:10px;
    transition:0.5s;
    cursor:default;
    margin:1%;
}

.card img{
    width:50px;
    margin-right:0.5rem;
}

.card iconify-icon{
  font-size:2.5em;
  margin-right:0.5rem;
}

.card:hover{
    background-color:var(--dark);
    color:var(--white);
}

.card:hover img{
    filter:brightness(0) invert(1);
}   

@media (max-width:620px){
    .card{
        width:100%;
    }
}





/*DIVISION_3*/
.division_3{
    width:100%;
    overflow:hidden;
}

.division_3 iframe{
    width:100%;
    height:100%;
    border:0;
}

form{
    background-color:var(--white);
    overflow:hidden;
}

form .title_header{
    width:100%;
    text-align:left;
}   

form .title_header .title{
    margin:0;
}

form fieldset{
    align-items:center;
}

form label{
    color:var(--gray);
    display:block;
}

form input, form select, form textarea{
    width:100%;
    padding:0.8rem;
    border:1px solid var(--gray);
    color:var(--gray);
    border-radius:5px;
    resize:none;
    font-weight:400;
}

form aside:first-child{
    margin-right:0.2rem;
}

form aside:last-child{
    margin-left:0.2rem;
}

form textarea{
    height:100px;
}   





.blizer{
    animation: blizer 1s linear;
}

@keyframes blizer{
    0%{
        width:0px;
        filter:blur(5px);
    },
    100%{
        width:100%;
        filter:blur(0px);
    }
}


@keyframes bright{
    0%{
        opacity:0;
        filter:blur(5px);
    },
    100%{
        opacity:1;
        filter:blur(0px);
    }
}



/*Animated bar*/
.bar{
    display:block;
    height: 5px;
    width: 100px;
    background: var(--dark);
    position: relative;
    border-radius: 5px;
    overflow: hidden;
    margin: 20px auto 20px 0;
}

.bar:before{
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    height: 100%;
    width: 5px;
    background: var(--white);
    -webkit-animation-duration: 4s;
    animation-duration: 4s;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-name: MOVE-BG;
    animation-name: MOVE-BG;
}

@keyframes MOVE-BG{
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    100% {
        -webkit-transform: translateX(105px);
        transform: translateX(105px);
    }
}

</style>
<body>

<!--NAV-->
<nav class="flex">
    <h1 class="medium logo">Humpy<em>Bumpy</em>.</h1>
    <ul class="nav_links flex">
        <li><a href="#" class="active"><b>Home</b><iconify-icon icon="material-symbols:home-outline"></iconify-icon></a></li>
        <li><a href="#"><b>Contact us</b><iconify-icon icon="tdesign:call-1"></iconify-icon></a></li>
        <li><a href="#"><b>About us</b><iconify-icon icon="mdi:about-circle-outline"></iconify-icon></a></li>
        <li>
            <a href="javascript:void(0)" class="lang en fixed_flex"><iconify-icon icon="ri:english-input"></iconify-icon></a>
        </li>
    </ul>
</nav>

<!--HEADER-->
<header>
    <figure class="carousel">
        <img src="assets/images/01.jpg" alt="" class="blizer" />
    </figure>
    <ol class="carousel_count fixed_flex">
        <li class="active">01</li>
        <li>02</li>
        <li>03</li>
    </ol>
    <aside class="carousel_arrows fixed_flex">
        <a href="javascript:void(0)" class="left_arrow fixed_flex" onclick="left_arrow()"><iconify-icon icon="gg:arrow-left"></iconify-icon></a>
        <a href="javascript:void(0)" class="right_arrow fixed_flex" onclick="right_arrow()"><iconify-icon icon="gg:arrow-right"></iconify-icon></a>
    </aside>
</header>

<!--MAIN-->
<main>
    <!--DIVISION_1-->
    <div class="divisions division_1">
        <article class="padding_3x">
            <h1 class="title medium">Welcome To <strong class="small">Company Name</strong></h1>
            <p> A forward-thinking, Balearic-based residential real estate developer operating in prime locations across the islands of Mallorca and Ibiza. Committed to driving progress and commercial success, we focus on delivering results via meticulous development strategies that maximize each project's potential.</p>
        </article>
    </div>
    
    <!--DIVISION_2-->
    <div class="divisions division_2 padding_2x">
        <section class="title_header padding_1x">
            <h1 class="title medium">Whether you're interested</h1>
            <span class="bar"></span>
        </section>
        <section class="cards flex padding_1x">
            <article class="fixed_flex card padding_1x">
                <iconify-icon icon="la:donate"></iconify-icon>
                <h3 class="small">INVEST WITH US</h3>
            </article>
            <article class="fixed_flex card padding_1x">
                <iconify-icon icon="carbon:collaborate"></iconify-icon>
                <h3 class="small">COLLABORATE WITH US</h3>
            </article>
            <article class="fixed_flex card padding_1x">
                <iconify-icon icon="bi:house"></iconify-icon>
                <h3 class="small">PURCHASING A HOME</h3>
            </article>
            <article class="fixed_flex card padding_1x">
                <iconify-icon icon="mdi:frequently-asked-questions"></iconify-icon>
                <h3 class="small">OTHER INQUIRIES</h3>
            </article>
        </section>
    </div>
    
    <!--DIVISION_3-->
    <div class="divisions division_3 flex">
        <section class="flex_content">
           <iframe frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=New+York,+NY,+USA&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
        </section>
        <section class="flex_content">
            <form class="padding_2x">
                <article class="title_header padding_1x">
                    <h1 class="title medium">Any Queries?</h1>
                    <p>Have any questions? we always love to hear from you. Please feel free to contact us.</p>
                </article>
                <fieldset>
                    <select name="query">
                        <option value="1" selected>Query type</option>
                    </select>
                </fieldset>
                <fieldset class="flex">
                    <aside class="flex_content">
                        <label for="fname">First name</label>
                        <input type="text" name="fname" id="fname" maxlength="50" />
                    </aside>
                    <aside class="flex_content">
                        <label for="lname">Last name</label>
                        <input type="text" name="lname" id="lname" maxlength="50" />
                    </aside>
                </fieldset>
                <fieldset class="flex">
                    <aside class="flex_content">
                        <label for="tel">Contact no</label>
                        <input type="tel" name="tel" id="tel" input-mode="number" maxlength="15" />
                    </aside>
                    <aside class="flex_content">
                        <label for="email">Email address</label>
                        <input type="email" name="email" id="email" input-mode="email" maxlength="50" />
                    </aside>
                </fieldset>
                <fieldset>
                    <label for="mssg">Message</label>
                    <textarea name="mssg" id="mssg" maxlength="250"></textarea>
                </fieldset>
                <fieldset>
                    <button class="btn btn_1">SUBMIT</button>
                </fieldset>
            </form>
        </section>
    </div>
</main>

<!--FOOTER-->
<footer class="flex padding_2x">
    <h1 class="medium logo title">Humpy<em>Bumpy</em>.</h1>
    <ul class="flex links padding_2x">
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Privacy policy</a></li>
    </ul>
    <hr></hr>
    <aside class="sub_footer flex">
        <p>© Copyrights 2023 || All rights reserved</p>
        <a href="#">Cookie policy</a>
    </aside>
</footer>
<script>
    //Global variables
var carousel_count = 0, carousel_images = ['https://source.unsplash.com/weekly?mountains', 'https://source.unsplash.com/weekly?nature', 'https://source.unsplash.com/weekly?ocean'], looper = setInterval(function(){right_arrow();}, 5000);

$("header").hover(
    function(){
        clearInterval(looper);
    },
    function() {
        looper = setInterval(function(){right_arrow();}, 5000);
    }
);

function right_arrow(){
    carousel_count++;
    $(".carousel_arrows").children().css("opacity", "0.7");
    $(".right_arrow").css("opacity","1");
    carousel();
}

function left_arrow(){
    carousel_count--;
    $(".carousel_arrows").children().css("opacity", "0.7");
    $(".left_arrow").css("opacity","1");
    carousel();
}

function carousel(){
    $(".carousel_count li").removeClass("active");
    if (carousel_count < 0) { carousel_count = carousel_images.length-1; }
    if (carousel_count > 2) { carousel_count = 0; }
    $(".carousel_count li:nth-child("+parseInt(carousel_count+1)+")").addClass("active");
    $('.carousel').html('<img src="'+carousel_images[carousel_count]+'" alt="" class="blizer" />');
}






//WindowOnScroll
window.onscroll = function() {
if (window.matchMedia("(max-width: 920px)").matches === true) {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        $("nav").css("position","relative");
    } else {
        $("nav").css("position","fixed");
    }
    
    if ((window.innerHeight + Math.round(window.scrollY)) >= document.body.offsetHeight) {
        $(".nav_links").css("bottom","-300px");
    } else {
        $(".nav_links").css("bottom","0px");
    }
} else {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        $("nav").css("background-color","var(--dark)");
        $("nav").css("box-shadow","0px 6px 16px -6px var(--gray)");
    } else {
        $("nav").css("background-color","transparent");
        $("nav").css("box-shadow","none");
    }
}
}

$(".lang").on("click", function(){
    if ($(this).hasClass("en")){
        $(this).html('<iconify-icon icon="material-symbols:language-spanish-rounded"></iconify-icon>');
        $(this).removeClass("en").addClass("es");
    } else {
        $(this).html('<iconify-icon icon="ri:english-input"></iconify-icon>');
        $(this).removeClass("es").addClass("en");
    }
});
</script>
</body>
</html>