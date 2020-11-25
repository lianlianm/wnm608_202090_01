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


$b = 10;

//2. String 
$name = "Yerguy"; // a string of character
$name = 'Hamilton'; // 单引号双引号都可以作为一个字符串

//3. Boolean  
// boolean is about true or false
$isOn = true;

// 其他value类型：function, class, object





// Math


echo 5 + 4; // website 显示9
echo $b +4; //因为最后一个b赋值为10， 所有website显示14 
echo 5 + 4 * 2; // 13，按照正常math的运算顺序来

// Order of Operation
// PEMDAS 运算次序，运算优先级
echo (5 + 4) * 2; // 18，按照优先级运算顺序来



// Concatenation系列关联的事物
echo "<div>$b + $a = $b+$a</div>"; // 10 + 5 = 10+5   没有产生concatenation的效果，因为+在php中只代表addition
echo "<div>b + a = " . "c</div>"; // b + a = c      PHP中 . 表示concatenation or combine .符号前后的two strings together, 以上string A是"<div>b + a = "， string B是"c</div>"
echo "<div>$b + $a = " . ($b+$a) . "</div>"; // 10 + 5 = 15

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


// Superglobal 超全局变量，其中$_GET $_POST非常常用，都是基于URL收集数据，但post比get传输数据安全

// ?name=Joey 是一个URL

echo "<div><a href='?name=Joey'>Joey</a></div>"; //我们赋值name是Joey
echo "<div><a href='?name=Frank'>Frank</a></div>"; //我们赋值name是Frank
echo "<div>My name is {$_GET['name']}</div>"; //当我们点击Joey时，发送name的值给表单，则{$_GET['name']} = Joey, 当点击Frank时 同理


echo "<div><a href='?name={$_GET['name']}&type=h1'>H1</a></div>";
echo "<div><a href='?name={$_GET['name']}&type=button'>BUTTON</a></div>";
echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";
// 把<div>改换成<{$_GET['type']}>， 就是My name is {$_GET['name']}外面应用的html标签也成为变量，取决于你点击H1 还是BUTTON。 比如点击Joey,显示My name is Joey, 然后点击H1 则变成<h1>My name is Joey</h1>的结果 字变大，若点击BUTTON 则变成<button>My name is Joey</button>的结果  变成文字按钮

// 以上get or post应用非常非常非常有用，可以以此类型create many cool pages!!!!!!!!


?>


<hr>

<?php

// Arrays 数组
// [] 等同于 array(),都是创建一个数组，array(key => value, ...)
// 所以，下面两个变量设置，是一样的

$colors =  array("red","green", "blue");
$colors = ["red","green","blue"]; 

echo $colors[1]; // green    $color[这其中是要输入数值，从0开始]

echo "
    <br>$colors[0]
    <br>$colors[1]
    <br>$colors[2]
";  
// red
// green
// blue有转行
echo "
    $colors[0]
    $colors[1]
    $colors[2]
"; 
//redgreenblue 无转行无space

echo count($colors); // 3 count is a function函数

?>
 

<div style="color:<?= $colors[1] ?>">
    This text is green
</div>
<!-- php中<?= 变量 ?> ,这个tag是意思echo out one value that you put inside of this block -->
<!-- 将green颜色代入 -->


<?php

// Associative Array 联合数组(是带有字符串索引的数组，array with string indexes
// )
// => equals arrow等号箭头 是用在数组中，是指对应关系，相当于value，讲此值分配给该索引

$colorsAssociative = [
   "red" => "#f00",
   "green" => "#0f0",
   "blue" => "#00f"
];

echo $colorsAssociative['red']; // #foo

?>

<hr>

<?php

// Casting 转换
// 将一个元素的值类型转换我另一种值类型
$c = "$a"; //设置变量c为字符串string 5 而不是number 5，
$d = $c*1;  // 将string 5乘以1，就强制把string5 转换成呢个number5

$colorsObject = (object)$colorsAssociative;

// echo $colorsObject; 不运行的，无法直接echo对象


echo "<hr>";

// Array Index Notation 数组索引符号
echo $colors[0]."<br>"; // red
echo $colorsAssociative['red']."<br>"; // #foo
echo $colorsAssociative[$colors[0]]."<br>"; // #foo 使用变量来获取变量，使用变量来创建变量

// Object Property Notation ->
// -> 是指对象属性符号，比如下面是从$colorObject中调用red
echo $colorsObject->red."<br>"; // #foo
echo $colorsObject->{$colors[0]}."<br>"; // #foo

?>

<hr>





<?php

//PHP中动态输出HTML内容，是通过print 和 echo 语句来实现的，在实际使用中， print 和 echo 两者的功能几乎是完全一样。 但， echo可以同时输出多个字符串，而print_r只可以同时输出一个字符串

print_r($colors); // Array([0]=>red[1]=>green[2]=>blue)
echo "<hr>";

print_r($colorsAssociative); // Array([red]=>#foo[green]=>#ofo[blue]=>#oof)
echo "<hr>";

echo "<pre>",print_r($colorsObject),"</pre>"; // html的<pre></pre>标签用可定义预格式化的文本。 被包围在pre 元素中的文本通常会保留空格和换行符。 而文本也会呈现为等宽字体。 



// CUSTOM FUNCTIONS 自创建函数function
// 如下就是自定义一个print_p功能，这样就把一个复杂的函数过程通过自定义的方式给隐藏起来了

function print_p($d) {
    echo "<pre>",print_r($d),"</pre>";
}

print_p($_GET);
print_p($colors);



//这里是本学期所有PHP的sample， 
// ！！！！remember the word string
// ！！！！remember how to varible












































