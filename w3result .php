<?php

$input1=$_GET["input1"];
$input2=$_GET["input2"];
$group=$_GET["group"];

echo "input 1 is:".$input1."<br/>";
echo "input 2 is:".$input2."<br/>";

echo "Your group is: ".$group."<br/>";

if($group=="red"){
	echo "your geroup is red<br/>";
		echo "<body bgcolor='red'>";
}else{
	echo "your group is blue<br/>";
		echo "<body bgcolor='blue'>";
}else{
	echo "your group is yellow<br/>";
		echo "<body bgcolor='yellow'>";
}

$interest=$_GET["interest"];
echo "喜歡的屬性:";
foreach ($interest as $data) {
	echo " ".$data;
}
echo "<br/>";

for($i=0;$i<count($interest);$i++){
	echo $interest[$i];
}

?>