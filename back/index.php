<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    <form action="server.php" method="post">
        <p>
            用户名：<input type="text" name="username" id="name">
            <span id="tips"></span>
        </p>
        <p>
            密   码：<input type="password" name="password">
        </p>
        <p>
            <input type="submit">
        </p>
        <p>
            <a href="reg.php?role=teacher">老师注册</a>
            <a href="reg.php?role=student">学生注册</a>
        </p>
    </form>
<script src="jquery/jquery.min.js"></script>
<script>
    $('#name').blur(function (){
        $.get('check.php?username='+this.value,function (data){
            // console.log(data);
            $('#tips').text(data);
        });
    });
</script>
</body>
</html>