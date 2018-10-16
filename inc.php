<?php

//variables for the titles
/*$a = "Chairman";
$b = "Deputy Chairman";
$c = "Secretary General";
$d = "Finance Secretary";
$e = "Constitutional Affairs Secretary";
$f = "Academic Secretary";
$g = "Gender Affairs Secretary";
$h = "Special Needs Secretary";
//constants for the contestants names
//chairman firstname and last name for each contestant and in their arrays
//$a1 = "21 Savage"; Full Name

$a1a="21";
$a1b="Savage";
$a1c="21savage.jpg";
$a1 = array("$a1a"=>"21","$a1b"=>"Savage","$a1c"=>"21savage.jpg"); //array for a contestant name -first and last name
//$a1 = array("21","Savage","21savage.jpg");
//$a2 = "Kendrick Lamar";
$a2a="Kendrick";
$a2b="Lamar";
$a2c="lamar.jpg";
$a2 = array("$a2a"=>"Kendrick","$a2b"=>"Lamar","$a2c"=>"lamar.jpg");
//deputy chairman
//$b1 = "Quavo Marshall";
$b1a="Quavo";
$b1b="Marshall";
$b1c="quavo2.jpg";
$b1 = array("$b1a"=>"Quavo","$b1b"=>"Marshall","$b1c"=>"quavo2.jpg");
//$b2 = "Offset Kendrall";
$b2a = "Offset";
$b2b = "Kendrall";
$b2c="offset.jpg";
$b2 = array("$b2a"=>"Offset","$b2b"=>"Kendrall","$b2c"=>"offset.jpg");
//secretary general
//$c1 = "Takeoff Khari";
$c1a = "Takeoff";
$c1b ="Khari";
$c1c ="takeoff.jpg";
$c1 = array("$c1a"=>"Takeoff","$c1b"=>"Khari","$c1c"=>"takeoff.jpg");
//$c2 = "Kodak Black";
$c2a = "Kodak";
$c2b = "Black";
$c2c="kodak.jpg";
$c2 = array("$c2a"=>"Kodak","$c2b"=>"Black","$c2c"=>"kodak.jpg");
//finance secretary
//$d1 = "Lil Uzi";
$d1a = "Lil";
$d1b = "Uzi";
$d1c="uzi.jpg";
$d1 = array("$d1a"=>"Lil","$d1b"=>"Uzi","$d1c"=>"uzi.jpg");
//$d2 = "Bryson Tiller";
$d2a = "Bryson";
$d2b = "Tiller";
$d2c="bryson.jpg";
$d2 = array("$d2a"=>"Bryson","$d2b"=>"Tiller","$d2c"=>"bryson.jpg");
//constitutional affairs secretary
//$e1 = "Takeoff Khari";
$e1a = "Takeoff";
$e1b = "Khari";
$e1c="takeoff.jpg";
$e1 = array("$e1a"=>"Takeoff","$e1b"=>"Khari","$e1c"=>"takeoff.jpg");
//$e2 = "Kodak Black";
$e2a = "Kodak";
$e2b = "Black";
$e2c="kodak.jpg";
$e2 = array("$e2a"=>"Kodak","$e2b"=>"Black","e2c"=>"kodak.jpg");

//academic secretary
//$f1 = "Lil Uzi";
$f1a = "Lil";
$f1b = "Uzi";
$f1c="uzi.jpg";
$f1 = array("$f1a"=>"Lil","$f1b"=>"Uzi","$f1c"=>"uzi.jpg");
//$f2 = "Bryson Tiller";
$f2a = "Bryson";
$f2b = "Tiller";
$f2c="bryson.jpg";
$f2 = array("$f2a"=>"Bryson","$f2b"=>"Tiller","$f2c"=>"bryson.jpg");
//gender affairs secretary
//$g1 = "T bag";
$g1a = "T";
$g1b = "Bag";
$g1c="tbag2.jpg";
$g1 = array("$g1a"=>"T","$g1b"=>"Bag","$g1c"=>"tbag2.jpg");
//$g2 = "Kodak Black";
$g2a = "Kodak";
$g2b = "Black";
$g2c="kodak.jpg";
$g2 = array("$g2a"=>"Kodak","$g2b"=>"Black","$g2c"=>"kodak.jpg");
//special needs secretary
//$h1 = "Lil Uzi";
$h1a = "Lil";
$h1b = "Uzi";
$h1c="uzi.jpg";
$h1 = array("$h1a"=>"Lil","$h1b"=>"Uzi","$h1c"=>"uzi.jpg");
//$h2 = "Bryson Tiller";
$h2a = "Bryson";
$h2b = "Tiller";
$h2c="bryson.jpg";
$h2 = array("$h2a"=>"Bryson","$h2b"=>"Tiller","$h2c"=>"bryson.jpg");

/*
//variables for the titles
$a = "Chairman";
$b = "Deputy Chairman";
$c = "Secretary General";
$d = "Finance Secretary";
$e = "Constitutional Affairs Secretary";
$f = "Academic Secretary";
$g = "Gender Affairs Secretary";
$h = "Special Needs Secretary";
//constants for the contestants names
//chairman firstname and last name for each contestant
$a1 = "21 Savage";
$a2 = "Kendrick Lamar";

//deputy chairman
$b1 = "Quavo Marshall";
$b2 = "Offset Kendrall";
//secretary general
$c1 = "Takeoff Khari";
$c2 = "Kodak Black";
//finance secretary
$d1 = "Lil Uzi";
$d2 = "Bryson Tiller";
//constitutional affairs secretary
$e1 = "Takeoff Khari";
$e2 = "Kodak Black";
//academic secretary
$f1 = "Lil Uzi";
$f2 = "Bryson Tiller";
//gender affairs secretary
$g1 = "T bag";
$g2 = "Kodak Black";
//special needs secretary
$h1 = "Lil Uzi";
$h2 = "Bryson Tiller";

//indexed arrays
$chair= array ("$a1", "$a2", "$b1", "$b2", "$c1", "$c2");
$depchair= array("$b1", "$b2",);
$secgen= array("$c1", "$c2");
$finasec= array("", "");
$constsec= array("", "");
$acadsec= array("", "");
$gendersec= array("", "");
$specisec= array("", "");

//associative arrays

/*$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo  $x . " = " . $x_value;
    echo "<br>";
}*/

/*
$m= "21 Savage";

//echo "<br>";
$chair = array("$a1"=>"21 Savage", "$a2"=>"Kendrick Lamar", "$b1"=>"Quavo Marshall", "$b2"=>"Offset Kendrall", "$c1"=>"Takeoff Khari", "$c2"=>"Kodak Black","$d1"=>"Lil Uzi","$d2"=>"Bryson Tiller");

foreach($chair as $x => $x_value) {

}

*/





//variables for the titles
$a = "Chairman";
$b = "Deputy Chairman";
$c = "Secretary General";
$d = "Finance Secretary";
$e = "Constitutional Affairs Secretary";
$f = "Academic Secretary";
$g = "Gender Affairs Secretary";
$h = "Special Needs Secretary";
//constants for the contestants names
//chairman firstname and last name for each contestant and in their arrays
//$a1 = "21 Savage"; Full Name

$a1a="21";
$a1b="Savage";
$a1c="21savage.jpg";
$a1 = array("$a1a"=>"21","$a1b"=>"Savage","$a1c"=>"21savage.jpg"); //array for a contestant name -first and last name
//$a1 = array("21","Savage","21savage.jpg");
//$a2 = "Kendrick Lamar";
$a2a="Kendrick";
$a2b="Lamar";
$a2c="lamar.jpg";
$a2 = array("$a2a"=>"Kendrick","$a2b"=>"Lamar","$a2c"=>"lamar.jpg");
//deputy chairman
//$b1 = "Quavo Marshall";
$b1a="Quavo";
$b1b="Marshall";
$b1c="quavo2.jpg";
$b1 = array("$b1a"=>"Quavo","$b1b"=>"Marshall","$b1c"=>"quavo2.jpg");
//$b2 = "Offset Kendrall";
$b2a = "Offset";
$b2b = "Kendrall";
$b2c="offset.jpg";
$b2 = array("$b2a"=>"Offset","$b2b"=>"Kendrall","$b2c"=>"offset.jpg");
//secretary general
//$c1 = "Takeoff Khari";
$c1a = "Takeoff";
$c1b ="Khari";
$c1c ="takeoff.jpg";
$c1 = array("$c1a"=>"Takeoff","$c1b"=>"Khari","$c1c"=>"takeoff.jpg");
//$c2 = "Kodak Black";
$c2a = "Kodak";
$c2b = "Black";
$c2c="kodak.jpg";
$c2 = array("$c2a"=>"Kodak","$c2b"=>"Black","$c2c"=>"kodak.jpg");
//finance secretary
//$d1 = "Lil Uzi";
$d1a = "Lil";
$d1b = "Uzi";
$d1c="uzi.jpg";
$d1 = array("$d1a"=>"Lil","$d1b"=>"Uzi","$d1c"=>"uzi.jpg");
//$d2 = "Bryson Tiller";
$d2a = "Bryson";
$d2b = "Tiller";
$d2c="bryson.jpg";
$d2 = array("$d2a"=>"Bryson","$d2b"=>"Tiller","$d2c"=>"bryson.jpg");
//constitutional affairs secretary
//$e1 = "Takeoff Khari";
$e1a = "Takeoff";
$e1b = "Khari";
$e1c="takeoff.jpg";
$e1 = array("$e1a"=>"Takeoff","$e1b"=>"Khari","$e1c"=>"takeoff.jpg");
//$e2 = "Kodak Black";
$e2a = "Kodak";
$e2b = "Black";
$e2c="kodak.jpg";
$e2 = array("$e2a"=>"Kodak","$e2b"=>"Black","e2c"=>"kodak.jpg");

//academic secretary
//$f1 = "Lil Uzi";
$f1a = "Lil";
$f1b = "Uzi";
$f1c="uzi.jpg";
$f1 = array("$f1a"=>"Lil","$f1b"=>"Uzi","$f1c"=>"uzi.jpg");
//$f2 = "Bryson Tiller";
$f2a = "Bryson";
$f2b = "Tiller";
$f2c="bryson.jpg";
$f2 = array("$f2a"=>"Bryson","$f2b"=>"Tiller","$f2c"=>"bryson.jpg");
//gender affairs secretary
//$g1 = "T bag";
$g1a = "T";
$g1b = "Bag";
$g1c="tbag2.jpg";
$g1 = array("$g1a"=>"T","$g1b"=>"Bag","$g1c"=>"tbag2.jpg");
//$g2 = "Kodak Black";
$g2a = "Kodak";
$g2b = "Black";
$g2c="kodak.jpg";
$g2 = array("$g2a"=>"Kodak","$g2b"=>"Black","$g2c"=>"kodak.jpg");
//special needs secretary
//$h1 = "Lil Uzi";
$h1a = "Lil";
$h1b = "Uzi";
$h1c="uzi.jpg";
$h1 = array("$h1a"=>"Lil","$h1b"=>"Uzi","$h1c"=>"uzi.jpg");
//$h2 = "Bryson Tiller";
$h2a = "Bryson";
$h2b = "Tiller";
$h2c="bryson.jpg";
$h2 = array("$h2a"=>"Bryson","$h2b"=>"Tiller","$h2c"=>"bryson.jpg");

//image variables
//Chairman


//associative arrays
/*
$chair = array("$a1"=>"21 Savage", "$a2"=>"Kendrick Lamar");
$depchair= array("$b1"=>"Quavo Marshall", "$b2"=>"Offset Kendrall");
$secgen = array("$c1"=>"Takeoff Khari", "$c2"=>"Kodak Black");
$finasec = array("$d1"=>"Lil Uzi","$d2"=>"Bryson Tiller");
$constsec= array("$e1"=>"Takeoff Khari", "$e2"=>"Kodak Black");
$acadsec= array("$f1"=>"Lil Uzi", "$f2"=>"Bryson Tiller");
$gendersec= array("$g1"=>"T Bag", "$g2"=>"Kodak Black");
$specisec= array("$h1"=>"Lil Uzi", "$h2"=>"Bryson Tiller");
*/

//foreach($chair as $x => $x_value) {
//}



/*
//indexed arrays
$chair= array ("$a1", "$a2", "$b1", "$b2", "$c1", "$c2");
$depchair= array("$b1", "$b2",);
$secgen= array("$c1", "$c2");
$finasec= array("", "");
$constsec= array("", "");
$acadsec= array("", "");
$gendersec= array("", "");
$specisec= array("", "");
*/

