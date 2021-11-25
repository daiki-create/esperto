<?php


$subject=$_POST["subject"];
$name=$_POST["name"];
$content=$_POST["content"];
$safe_subject=htmlspecialchars($subject,ENT_QUOTES,"UTF-8");
$safe_name=htmlspecialchars($name,ENT_QUOTES,"UTF-8");
$safe_content=htmlspecialchars($content,ENT_QUOTES,"UTF-8");

$to="odai93169@gmail.com";
$header="from:$safe_name";
mb_send_mail($to,$safe_subject,$safe_content,$header);

header("location: index.php");

