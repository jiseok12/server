<html>
<head>
<script>        var logger = function() {        var oldConsoleLog = null;        var pub = {};        pub.enableLogger = function enableLogger() {            if (oldConsoleLog == null)                return;            window['console']['log'] = oldConsoleLog;        };        pub.disableLogger = function disableLogger() {            oldConsoleLog = console.log;            window['console']['log'] = function() {};        };        return pub;    }();     $(document).ready(        function() {            console.log('콘솔 로그가 찍힌다.');            logger.disableLogger();            console.log('콘솔 로그가 블락 처리 됐다 ');            logger.enableLogger();            console.log('콘솔 로그가 다시 찍힌다.');        }    );   
</script>
</head>
<body>
</body>
</html>
