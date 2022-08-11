<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            jistory
        </title>
        <style>
        .container{
        margin:0px auto;
        width: 300px;
        height:100%;
        }
        .box{
        margin:0px auto;
        border:1px solid;
        padding: 10px;
        }
        .login{
        margin:0px auto;
        }
        input {
        text-align: center;
        
        }
        a{
            text-decoration:none;
            color:black;
        }
    </style>
<script src="http://code.jquery.com/jquery.min.js"></script><script type="text/javascript">    <!--    var logger = function() {        var oldConsoleLog = null;        var pub = {};        pub.enableLogger = function enableLogger() {            if (oldConsoleLog == null)                return;            window['console']['log'] = oldConsoleLog;        };        pub.disableLogger = function disableLogger() {            oldConsoleLog = console.log;            window['console']['log'] = function() {};        };        return pub;    }();     $(document).ready(        function() {            console.log('콘솔 로그가 찍힌다.');            logger.disableLogger();            console.log('콘솔 로그가 블락 처리 됐다 ');            logger.enableLogger();            console.log('콘솔 로그가 다시 찍힌다.');        }    );    //--></script>
    </head>
    <body>
    <div class="container">
    <div class="box">
        <div class="login">
    <h1 style="text-align:center;">회원가입</h1>
        <form name="form" method="post" action="view.php">
        id<br>
        <input type="id" name="idj"style="height: 20px;width:99%;"><br>
         password:<br>
        <input type="password" name="pas"style="height: 20px;width:99%;"><br>
        <div align="center">
        <input type="submit" value="회원가입"style="width:100%;margin:20px auto;">
    </div>
    </form>
        </div>
    </div>
    </body>
</html>