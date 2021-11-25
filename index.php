<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "component/head.php"?>
</head>
<body>
<header>
    <?php include "component/nav.html";
            include "component/queryDialog.php";
            include "component/scheduleDialog.php";
    ?>
</header>
<div class="top-img-container" style="position: relative">
    <img src="image/top.jpg" class="top-img" alt="" id="top-img"
    style="position: absolute;">
    <div class="sub-title"
         style="text-shadow: 3px 3px 5px gray">富山大学競技フットサルクラブ</div>
    <div class="title"
    style="text-shadow: 3px 3px 5px gray">Esperto</div>
</div>
<div class="esperto" id="esperto"
style="background-color: lightgrey;">
    <div class="esperto-box" style="background-color: white;
        box-shadow: 2px 2px 4px gray">
        <img src="image/emblem.jpg" class="emblem-img" alt="">
        <div class="esperto-title" style="color: cornflowerblue;
            text-shadow: 2px 2px 4px gray;">Esperto</div>
        <br>
        <div class="esperto-paragraph" style="color: cornflowerblue">
            Espertoはポルトガル語で「ずる賢い」という意味です。 <br>
            フットサル戦術を理解し賢く戦うチームを目指しています。
        </div>
        <br>
    </div>
</div>
<script>
    var img_height=document.getElementById("top-img").style.height
    document.getElementById("esperto").style.marginTop=parseInt(img_height)
</script>
<div class="main-contents">
    <div class="content">
        <div class="left-content">
            <div class="left-title">設立</div>
            <br>
            <div class="left-paragraph">
                2018年 4月<br>
                任意団体として活動開始<br>
                <br>
                <br>
                2020年 3月 <br>
                富山大学公認課外団体 <br>
                として認定
            </div>
        </div>
        <div class="right-content">
            <img src="image/establish.jpg" class="right-img" alt="">
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <div class="left-title">部員</div>
            <br>
            <div class="left-paragraph">
                <br>
                部員32名<br>
                <br>
                (フィールド24名 <br>
                ゴレイロ4名 <br>
                マネージャー4名) <br>
                <br>
                代表 : 3年 佐々勇真<br>
                副代表 : 3年 松野令佑 <br>
                　　　　2年 友尻創太
            </div>
        </div>
        <div class="right-content" >
            <img id="member-img1" src="image/member.jpg" class="right-img member-img" alt="">

        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <div class="left-title">練習場所</div>
            <br>
            <br>
            <div class="left-paragraph">
                <ul>
                    <li style="color: orangered ">山田村総合体育センター</li>
                    <li style="color: limegreen">アイザックスポーツドーム</li>
                    <li style="color: blue">富山市立興南中学校</li>
                </ul>
            </div>
        </div>
        <div class="right-content" >
            <iframe  src="https://www.google.com/maps/d/embed?mid=1Pa_qq2NNA5kH5tAXSYM_SbUgZQ17_dvl" class="map"></iframe>
        </div>
    </div>
</div>

<footer>
    <?php include "component/footer.html"?>
</footer>
</body>
</html>