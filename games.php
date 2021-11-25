<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php include "component/head.php"?>
</head>
<body>
<header>
    <?php include "component/nav.html";
    include "component/queryDialog.php";
    include "component/scheduleDialog.php";
    ?>
</header>
<div class="top-img-container" style="position: relative;
background-color: white">
    <img src="image/top2.jpg" class="top-img" alt="" id="top-img"
         style="position: absolute;">
    <div class="sub-title"
         style="text-shadow: 3px 3px 5px gray">富山大学競技フットサルクラブ</div>
    <div class="title"
         style="text-shadow: 3px 3px 5px gray">Esperto</div>
</div>
<div class="games-main-contents">
    <div class="game-table">
        <div class="year">2019</div>
        <table class="table">
            <tr>
                <th>大会</th>
                <th>対戦相手</th>
                <th>結果</th>
            </tr>
            <tr>
                <td>第15回全日本大学選手権北信越大会</td>
                <td>福井大学</td>
                <td>1-0○</td>
            </tr>
            <tr>
                <td>第15回全日本大学選手権北信越大会</td>
                <td>信州大学</td>
                <td>0-3●</td>
            </tr>
            <tr>
                <td>第15回全日本大学選手権北信越大会</td>
                <td>金沢大学</td>
                <td>0-7●</td>
            </tr>
            <tr>
                <td>第15回全日本大学選手権北信越大会</td>
                <td>新潟大学</td>
                <td>1-3●</td>
            </tr>
            <tr>
                <td>北信越大学Fリーグ</td>
                <td>金沢大学</td>
                <td>0-2●</td>
            </tr>
            <tr>
                <td>北信越大学Fリーグ</td>
                <td>信州大学</td>
                <td>4-4△</td>
            </tr>
            <tr>
                <td>北信越大学Fリーグ</td>
                <td>信州大学</td>
                <td>0-3●</td>
            </tr>
            <tr>
                <td>北信越大学Fリーグ</td>
                <td>金沢大学</td>
                <td>1-4</td>
            </tr>
        </table>
    </div>
    
</div>
<footer>
    <?php include "component/footer.html"?>
</footer>
</body>
</html>