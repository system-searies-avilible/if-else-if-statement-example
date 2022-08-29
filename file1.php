<?php
$per=55;

if($per>=80 && $per<=100){
	echo"Grade A+1";
}
elseif($per>=60 && $per<=79){
	echo"Grade A";
}
elseif($per>=45 && $per<=59){
	echo"Grade B";
}
elseif($per>=33 && $per<=44){
	echo"Grade C";
}
elseif($per<33){
	echo"Grade fail";
}
else{
	echo"Please enter a valid persontage";
}
?>