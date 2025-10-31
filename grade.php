<?php
echo "Enter your grade";
$grade=readline();
if($grade>=90 && $grade<=100){
    echo "The grade is A";
}elseif($grade>=75 && $grade<=89){
echo "The grade is B";
}elseif($grade>=60 && $grade<=74){
    echo "The grade is C";
}elseif($grade>=40 && $grade<=59){
    echo "The grade is D";
}elseif($grade>100){
    echo "Please enter number between 0 to 100.";
}else {
    echo"You failed!!";
}
?>