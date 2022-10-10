<html>
    <head>
        <meta charset="UTF-8">
        <title>얼간이 연구소</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://han3283.cafe24.com/js/lightslider/js/lightslider.js"></script>
    </head>
    <body>
            <tr>
           		<td colspan="3" align="center" class="mem"> 
              	<a href="member/ghldnjsrkdlq.php">회원가입 하시겠습니까?</a>
           </td>
           		<td colspan="3" align="center" class="mem"> 
              	<a href="member/rptlvks.php">게시판으로 이동</a>
           </td>
        <Script>
            function myFunction() 
            {
                document.getElementById("damm").location.href="/member/login.php";
            }
        </Script>
        <Script>
            function myFunction() 
            {
                document.getElementById("deem").location.href="./member/login.php";
            }
        </Script>
        <Script>
            function myFunction() 
            {
                document.getElementById("demo").<a href="./member/회원가입.php">Label</a>;
            }
        </Script>
        
        <h1>Welcome To Nud Lab</h1> 
        <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="v1.png" class="imgback">
          <div class="text">프로그래밍</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="v1.png" class="imgback">
          <div class="text">기획</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="v1.png" class="imgback">
          <div class="text">디자인</div>
        </div>

        </div>
        <br>

        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        <style>
                    * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
          max-width: 100%;
          height:685px;
          position: relative;
          margin: auto;
        }

        .imgback {
          width:100%;
          height:820px;
        }

        /* Caption text */
        .text {
          color: #000000;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }

        .active {
          background-color: #717171;
        }

        /* Fading animation */
        .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 1.5s;
          animation-name: fade;
          animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }

        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .text {font-size: 11px}
        }
        </style>
        <h2>얼간이 연구소는 대전 대신고등학교의 게임 동아리 입니다.
        </h2>
        <p>
            저희 동아리는 프로그래밍, 디자인, 기획교육과 그 실력을 발휘할 수 있는 각종 대회의 참가를 주 활동 목표로 하고 있으며 한국의 게임 개발자들과 인터뷰를 진행하고 있습니다. 이 홈페이지에서 저희의 활동 일지와 각종 교육자료를 확인 하실 수 있습니다.
        </p>
        <script>
            var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
        </script>
        
    </body>    
</html>