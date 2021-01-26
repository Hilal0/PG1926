<?php 

$time=date("H");
if(06<$time && $time<=10){
    $message="Günaydin";
    echo "$message";
}

if(10<$time && $time<=17){
    $message="İyi Günler";
    echo "$message";
}

if(17<$time && $time<=20){
    $message="İyi Akşamlar";
    echo "$message";
}

if(20<$time && $time<=24){
    $message="İyi Geceler";
    echo "$message";
}

if(00<$time && $time<=06){
    $message="Esenlikler Dilerim";
    echo "$message";
}
?>