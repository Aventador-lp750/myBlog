<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
</head>
<body>
<?php
    $role = $_GET['role'];
    if($role == 'teacher'){
        echo "welcome teacher!!!";
    }else{
        echo "welcome student...";
    }
?>
</body>
</html>