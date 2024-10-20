<!DOCTYPE html>
<html>
<body>


<?php
// 1 = PHP HOME ==========================
echo "Courinn PHP";
echo "<br>";
?>

<p>......................................</p>


<?php
// 2 = PHP Comments ======================
// This is a single-line comment
echo "Coba Comment";

# This is also a single-line comment

/* This is a
multi-line comment */
?>

<p>......................................</p>


<?php
// 3 = PHP Variables =====================
$x = 28;
$y = "Arin";

echo $x;
echo "<br>";
echo $y;
?>

<p>......................................</p>


<?php
// 4 = PHP Echo and Print ================
// tampilkan data pake print
$txt1 = "Ayo Belajar PHP Bersama Courinn";
$txt2 = "WhaleCourinn.com";

print "<h2>$txt1</h2>";
print "<p>Belajar PHP di $txt2</p>";
?>

<p>......................................</p>


<?php
// tampilkan data pake echo
$txt1 = "Ayo Belajar PHP Bersama Courinn";
$txt2 = "WhaleCourinn.com";

echo "<h2>$txt1</h2>";
echo "<p>Belajar PHP di $txt2</p>";
?>

<p>......................................</p>


<?php
// 5 =  Data Types String =================
$x = "Hello Courinn!";
$y = 'Hello MyWhale!';

var_dump($x);
echo "<br>"; 
var_dump($y);
?>
<p>......................................</p>


<?php
// 6 = PHP Strings =======================
// double quotes
$x = "Arin!";
echo "Haihaii $x";
?>

<p>......................................</p>


<?php
// single quotes
$x = "Arin!";
echo 'Haihaii $x';
?>

<p>......................................</p>


<?php 
// 7 = PHP Numbers ======================= 3 types
$a = 28;
$b = 4.28;
$c = "45";

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
?>
<p>Line breaks were added for better readability.</p>

<p>......................................</p>


<pre>
<?php
// 8 = PHP Casting =======================
$a = 28;       // Integer
$b = 4.5;    // Float
$c = "Courinn"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (integer) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 
</pre>

<p>Note that when casting a Boolean into string it gets the value "1", and when casting NULL into string it is converted into an empty string "".</p>

<p>......................................</p>


<?php
// 9 = PHP Math  =========================
// Functions sqrt
echo(sqrt(169) . "<br>");
echo(sqrt(10000) . "<br>");
echo(sqrt(8) . "<br>");
echo(sqrt(225));
?>

<p>......................................</p>


<?php
// Functions round 
echo(round(28.45) . "<br>");
echo(round(0.99) . "<br>");
echo(round(0.556888) . "<br>");
echo(round(-100.89) . "<br>");
echo(round(-4.2845));
?>

<p>......................................</p>


<?php
// 10 = Operators Arithmetic ========================

// ADDITION 
$x = 20;  
$y = 8;

echo $x + $y;
?>

<p>......................................</p>


<?php
// SUBTRACTION 
$x = 40;  
$y = 5;

echo $x - $y;
?> 

<p>......................................</p>


<?php
// MULTIPLICATION 
$x = 4;  
$y = 5;

echo $x * $y;
?> 

<p>......................................</p>


<?php
// DIVISION 
$x = 28;  
$y = 4;

echo $x / $y;
?> 

<p>......................................</p>


<?php
// MODULUS 
$x = 28;  
$y = 5;

echo $x % $y;
?> 

<p>......................................</p>


<?php
// EXPONENTIATION 
$x = 2;  
$y = 4;

echo $x ** $y;
?> 

<p>......................................</p>


<?php
// 11 = Operators Assignment ======================
// X = Y
$x = 100;  
echo $x;
?>  

<p>......................................</p>


<?php
// X += Y
$x = 2800;  
$x += 45;

echo $x;
?>  

<p>......................................</p>


<?php
// 12 = Operators Comparison ========================

// EQUAL
$x = 45;  
$y = "45";

var_dump($x == $y); // returns true because values are equal
?>

<p>......................................</p>


<?php
// IDENTICAL
$x = 28;  
$y = "28";

var_dump($x === $y); // returns true because values are equal
?>

<p>......................................</p>


<?php
// IDENTICAL VERSE 2
$x = 5;  
$y = 5.0;

if ($x === $y) {
    echo "true <br>";
} else {
    echo "finish";
}
?>

<p>......................................</p>


<?php
// 13 = PHP Conditional Statements (If/Else/Elseif) ==================
// If Statement
$t = 28;

if ($t < 20) {
  echo "Selamat Datang Courinn!";
}
else {
    echo "Nilai yang Anda Masukkan Salah";
}
?>

<p>......................................</p>


<?php
// 14 = PHP Switch =====================
$favanimal = "cat";

switch ($favanimal) {
  case "cat":
    echo "Your favorite animal is cat!";
    break;
  case "dog":
    echo "Your favorite animal is dog!";
    break;
  case "hamsters":
    echo "Your favorite animal is hamsters!";
    break;
  default:
    echo "Your favorite animal is neither cat, dog, nor hamsters!";
}
?>

<p>......................................</p>


<?php
// kalau nilai yang dimasukkan tidak sesuai
$favanimal = "bird";

switch ($favanimal) {
  case "cat":
    echo "Your favorite animal is cat!";
    break;
  case "dog":
    echo "Your favorite animal is dog!";
    break;
  case "hamsters":
    echo "Your favorite animal is hamsters!";
    break;
  default:
    echo "Your favorite animal is neither cat, dog, nor hamsters!";
}
?>

<p>......................................</p>


<pre> 
<?php
// 15 = PHP Arrays ======================
$softdrink = array("Coca Cola", "Sprite", "Fanta"); 

var_dump($softdrink);
?>
</pre>

<p>......................................</p>


<pre>
<?php
// pemilihan nilai array
$softdrink = array("Coca Cola", "Sprite", "Fanta"); 

var_dump($softdrink [1]);
?>
</pre>

<p>......................................</p>


<?php  
// 16 = PHP Loop =====================
// For Loop
for ($x = 1; $x <= 28; $x++) {
  echo "The number is: $x <br>";
}
?>  

<p>......................................</p>


<?php
// 17 = PHP Function Arguments =====================
function familyName($fname, $year) {
  echo "$fname Laksmihita. Born in $year <br>";
}

familyName("Garini","2005");
familyName("Arin","2010");
familyName("Courinn","2015");
?>

<p>......................................</p>


<?php
// 18 = PHP Arrays TABLE =====================

$flowers = array("Jasmine", "Rose", "Lavender", "Bougenvile", "Lily", "Sunflower");
$colors = array("white", "red", "violet", "pink", "blue", "yellow");
$price = array("50.000", "60.000", "70.000", "80.000", "90.000", "100.000");

echo "<table border='1'>";
for($i=0; $i<=5; $i++) {
echo "<tr><td> $flowers[$i] </td><td> $colors[$i] </td><td> $price[$i]</tr></td>";
}
echo "</table>";
?>

</body>
</html>
