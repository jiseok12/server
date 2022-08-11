<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
height: 100vh;
display:center;
background-image:url('./images/images1.jpg');
background-repeat:no-repeat;
background-size : cover;
}
#box1{
width:100px;
magin:1px;
animation:rotatebo 3s infinite 5s;
}
@keyframes rotatebo{
from{transform: perspective(200px) rotateY(0deg);}
50%{transform: perspective(200px) rotateY(-180deg);}
to{transform: perspective(200px) rotateY(-360deg);}
}

#container{
margin:0 auto;
}
.mn{
text-align:center;
margin:0 auto;
}
.gh{
backgrond-color:skyblue;
position: absolute;
top:50%;
left:50%;
transform: translate(-50%,-50%);
}
a{
text-decoration:none;
}
</style>
<script src="http://code.jquery.com/jquery.min.js"></script><script type="text/javascript">    <!--    var logger = function() {        var oldConsoleLog = null;        var pub = {};        pub.enableLogger = function enableLogger() {            if (oldConsoleLog == null)                return;            window['console']['log'] = oldConsoleLog;        };        pub.disableLogger = function disableLogger() {            oldConsoleLog = console.log;            window['console']['log'] = function() {};        };        return pub;    }();     $(document).ready(        function() {            console.log('콘솔 로그가 찍힌다.');            logger.disableLogger();            console.log('콘솔 로그가 블락 처리 됐다 ');            logger.enableLogger();            console.log('콘솔 로그가 다시 찍힌다.');        }    );    //--></script>
</head>
<body>
<div id="container">
<div id="box1">
<h1 style="color:white"><a style="color:skyblue" href="/">JIseok</a></h1>
</div>

<div class="mn">
<div class="gh">
<h1 style="color:white">JI
Drive</h1>
<p style="color:white">키 입력</p>
<form action="upload.php" method="post">
<input type="password" name="id" autocomplete="off">
<input type="submit" value="입력">
</form>
</div>
</div>
</div>
</body>
</html>
