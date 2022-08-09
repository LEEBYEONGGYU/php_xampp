<?php include $_SERVER['DOCUMENT_ROOT']."/include/db.php"; ?>
<!DOCTYPE html>
<head>
    <title></title>
<link rel="stylesheet" href="/css/common.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<header>
    <div id="header_in">

    
    <div id="logo">LOGO</div>
    <div id="search_area">
        <input type="text" id="search_input" name="keyword" >
        <img src="/imgs/main_member.png" />
    </div>
    </div>
    <div id="catagory">
        <div id="catagory_title">카테고리</div>
        <nav id="menu">
            <ul>
                <li class="menu_t1">가전, TV</li>
                <li class="menu_t2">컴퓨터 노트북, 조립PC</li>
                <li class="menu_t3">모바일</li>
                <li class="menu_t4">카메라</li>
                <li class="menu_t5">자전거, 스포츠</li>
            </ul>
        </nav>
    </div>
    <div id="catagory_hover_img">
        <img src="/upload/admin/catagory/cat1_img.png" id="catagory_img1" />
        <img src="/upload/admin/catagory/cat1_2img.png" id="catagory_img2" class="def_none"/>
        <img src="/upload/admin/catagory/cat1_3img.png" id="catagory_img3" class="def_none"/>
        <img src="/upload/admin/catagory/cat1_4img.png" id="catagory_img4" class="def_none"/>
        <img src="/upload/admin/catagory/cat1_5img.png" id="catagory_img5" class="def_none"/>
    </div>
</header>

<script>
    $(".menu_t1").hover(function(){
        //mouseover
        $("#catagory_img1").show();
    },function(){
        //mouseout
        $("#catagory_img1").hide();
    });

    $(".menu_t2").hover(function(){
        $("#catagory_img2").show();
    },function(){
        $("#catagory_img2").hide();
    });

    $(".menu_t3").hover(function(){
        $("#catagory_img3").show();
    },function(){
        $("#catagory_img3").hide();
    });

    $(".menu_t4").hover(function(){
        //mouseover
        $("#catagory_img4").show();
    },function(){
        //mouseout
        $("#catagory_img4").hide();
    });
    $(".menu_t5").hover(function(){
        //mouseover
        $("#catagory_img5").show();
    },function(){
        //mouseout
        $("#catagory_img5").hide();
    });

</script>