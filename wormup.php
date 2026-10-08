<?php
echo "helloworld";
$name = "Samuel";
$age = 23;
$cite = "Hossaena";

echo "hello my name is $name and my age is $age and I live now in $cite";

if($age > 18){
	echo "pass";
}else{
	echo "Fail";
}

for($i = 1; $i <= 5; $i++){
	echo $i. "<br>";
}

$languages = ["PHP", "Java", "GO", "Python"];

foreach ($languages as $language){
	echo $language . "<br>";
}

function add($a, $b){
	return $a + $b;
}

echo add(10, 20);
?>

