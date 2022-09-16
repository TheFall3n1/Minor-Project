<?php
$name = $_POST['fname'];
$mob = $_POST['mob'];
$email = $_POST['email'];
$d = $_POST['d'];
$o = $_POST['o'];
$b = $_POST['b'];
$loc1 = $_POST['loc'];
$grd = $_POST['grd'];
$male = $_POST['m'];
$female = $_POST['f'];
$sing = $_POST['sing'];
$marr = $_POST['marr'];
$divo = $_POST['divo'];
$comm = $_POST['comm'];
$EdTime1 = $_POST['hst'];
$EdName1 =  $_POST['hsn'];
$EdTime2 =  $_POST['deg1'];
$EdName2 = $_POST['degn'];
$EdCol1 = $_POST['degc'];
$EdTime3 =  $_POST['deg2'];
$EdName3 = $_POST['degn1'];
$EdCol2 = $_POST['degc1'];
$wk1 = $_POST['wp0'];
$wc1 = $_POST['wc0'];
$wk2 = $_POST['wp1'];
$wc2 = $_POST['wc1'];
$wkt1 = $_POST['wy0'];
$wkt2 = $_POST['wy1'];
$wd1 = $_POST['wd1'];
$wd2 = $_POST['wd2'];
$ctc = $_POST['ctc'];
$skill1 = "Computer skills";
$skill2 = "Leadership experience";
$skill3 = "Communication skills";
$skill4 = "Organizational know-how";
$skill5 = "People skills";
$skill6 = "Collaboration talent";
$skill7 = "Problem-solving abilities";

?>


<html>
<head>
<title>Resume Maker</title>
</head>
<body> 
<h1>Resume</h1>
<h2><?php echo $name ?></h2>
<h3>Personal Details - <h4>Mobile :<?php echo $mob ?> 
<br>Email : <?php echo $email ?>
<br>Date of Birth: <?php echo $d, $o, $b ?>
<br>Guardian Name: <?php echo $grd ?>
<br>Location : <?php echo $loc1 ?>
</h4></h3>

<br>

<h3>Career Objectives</h3>
<p>To secure a challenging position in a reputable organization to expand my learnings, knowledge, and skills.</p>

<br>

<h3>Educational Details</h3>
<ul>
    <li><?php echo $EdTime1," , ", $EdName1 ?></li>
    <li><?php echo $EdTime2," , ", $EdName2," , ", $EdCol1 ?></li>
    <li><?php echo $EdTime3," , ", $EdName3," , ", $EdCol2 ?></li>
</ul>

<br>

<h3>Work Experience</h3>
<ul>
    <li><?php echo $wk1," , ", $wc1, " - ", $wkt1 ?></li>
    <li><?php echo $wk2," , ", $wc2," - ", $wkt2 ?></li>
</ul>

<br>

<h3>Skills</h3>
<ul>
    <li><?php echo $skill1 ?></li>
    <li><?php echo $skill2 ?></li>
</ul>


</body>
</html>