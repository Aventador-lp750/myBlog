<?php
    $connect = mysqli_connect('localhost','root','root','blog');
    if($connect){
        echo 'OK!';
    }else{
        echo 'NO!';
    }
