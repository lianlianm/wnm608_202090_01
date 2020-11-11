<?php

// hello;
// phpinfo(); 浏览器中会显示你的PHP版本信息

echo "Hello Word";
echo "<h1>Hello Word</h1>";
echo "<div>Goodbye Word</div>";
// echo 中内容是显示在浏览器中的
// echo 中也可以放入html code，且会按照html的规则运行出来



$a = 5; //$ is a symbol of variales 变量

// String Interpolation 插入字符串
echo "<div> I have $a things</div>";  // I have 5 things
echo '<div> I have $a things</div>';  // I have $a things
//in PHP, single quotation strings do not interpolate variables 单引号字符串不运行插入变量


// VALUE TYPES

// 1. Number: integer整数, float小数

// Integer
$b = 15;

// Float
$b = 0.576;


//2. String 
$name = "Yerguy"; // a string of character
$name = 'Hamilton'; // 单引号双引号都可以作为一个字符串

//3. Boolean  
// boolean is about true or false
$isOn = true;

// function, class, object


// Math

// Order of Operation
// PEMDAS
echo 5 + 4;
echo 5 + 4 * 2;
echo (5 + 4) * 2;


// Concatenation
echo "<div>$b + $a = $b+$a</div>";
echo "<div>b + a = " . "c</div>";
echo "<div>$b + $a = " . ($b+$a) . "</div>";

?>


<hr>
<div>This is my name</div>
<div>

<?php

$firstname = 'Lianlian';
$lastname = 'Ma';
$fullname = "$firstname $lastname";  //这儿$firstname与$lastname之间有space，则显示就会有space

echo $fullname;

?>
	

</div>


<hr>

<?php


// Superglobal

// ?name=Joey

echo "<div><a href='?name=Joey'>Joey</a></div>";
echo "<div><a href='?name=Frank'>Frank</a></div>";
echo "<div>My name is {$_GET['name']}</div>";

echo "<div><a href='?name={$_GET['name']}&type=h1'>H1</a></div>";
echo "<div><a href='?name={$_GET['name']}&type=button'>BUTTON</a></div>";
echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";
// 把<div>改换成<{$_GET['type']}>

?>


<hr>

<?php

// Arrays
$colors =  array("red","green", "blue");
$colors = ["red","green","blue"];

echo $colors[1];

echo "
    <br>$colors[0];
    <br>$colors[1];
    <br>$colors[2]
";


echo count($colors);

?>


<div style="color:<?= $colors[1] ?>">
    This text is green
</div>


<?php

// Associative Array
$colorsAssociative = [
   "red" => "#f00",
   "green" => "#0f0",
   "blue" => "#00f"
];


echo $colorsAssociative['red'];

?>

<hr>

<?php

// Casting
$c = "$a";
$d = $c*1;  

$colorsObject = (object)$colorsAssociative;

// echo $colorsObject;


echo "<hr>";

// Array Index Notation
echo $colors[0]."<br>";
echo $colorsAssociative['red']."<br>";
echo $colorsAssociative[$colors[0]]."<br>";

// Object Property Notation
echo $colorsObject->red."<br>";
echo $colorsObject->{$colors[0]}."<br>";


?>

<hr>

<?php

print_r($colors);
echo "<hr>";
print_r($colorsAssociative);
echo "<hr>";
echo "<pre>",print_r($colorsObject),"</pre>";



// CUSTOM FUNCTIONS
function print_p($d) {
    echo "<pre>",print_r($d),"</pre>";
}

print_p($_GET);
print_p($colors);
















































