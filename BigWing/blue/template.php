<?php
session_start();
$name = $_POST['fname'];
$_SESSION['fname']=$name;

$mob = $_POST['mob'];
$_SESSION['mob']=$mob;

$email = $_POST['email'];
$_SESSION['email']=$email;

$d = $_POST['d'];
$_SESSION['dd']=$d;

$o = $_POST['o'];
$_SESSION['mm']=$o;

$b = $_POST['b'];
$_SESSION['yyyy']=$b;

$loc1 = $_POST['loc'];
$_SESSION['loc']=$loc;

$grd = $_POST['grd'];
$_SESSION['grd']=$grd;

$web = $_POST['web'];
$_SESSION['web']=$web;

$role = $_POST['role'];
$_SESSION['role']=$role;

$gender = $_POST['gender'];
$_SESSION['gender']=$gender;

$status = $_POST['stat'];
$_SESSION['stat']=$stat;

$obj = $_POST['obj'];
$_SESSION['obj']=$obj;

$EdTime1 = $_POST['hst'];
$_SESSION['hst']=$hst;

$EdName1 =  $_POST['hsn'];
$_SESSION['hsn']=$hsn;

$EdTime2 =  $_POST['deg1'];
$_SESSION['deg1']=$deg1;

$EdName2 = $_POST['degn'];
$_SESSION['degn']=$degn;

$EdCol1 = $_POST['degc'];
$_SESSION['degc']=$degc;

$EdTime3 =  $_POST['deg2'];
$_SESSION['deg2']=$deg2;

$EdName3 = $_POST['degn1'];
$_SESSION['degn1']=$degn1;

$EdCol2 = $_POST['degc1'];
$_SESSION['degc1']=$degc1;

$wk1 = $_POST['wp0'];
$_SESSION['wp0']=$wp0;

$wc1 = $_POST['wc0'];
$_SESSION['wc0']=$wc0;

$wk2 = $_POST['wp1'];
$_SESSION['wp1']=$wp1;

$wc2 = $_POST['wc1'];
$_SESSION['wc1']=$wc1;

$wkt1 = $_POST['wy0'];
$_SESSION['wy0']=$wy0;

$wkt2 = $_POST['wy1'];
$_SESSION['wy1']=$wy1;

$wd1 = $_POST['det1'];
$_SESSION['det1']=$det1;

$wd2 = $_POST['det2'];
$_SESSION['det2']=$det2;

$ctc = $_POST['ctc'];
$_SESSION['ctc']=$ctc;

$skill1 = "Computer skills";
$skill2 = "Leadership experience";
$skill3 = "Communication skills";
$skill4 = "Organizational know-how";
$skill5 = "People skills";
$skill6 = "Collaboration talent";
$skill7 = "Problem-solving abilities";

?>
