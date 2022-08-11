<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script>
with ((console && console._commandLineAPI) || {}) {
  Object.defineProperty(console, '_commandLineAPI', { get : function() { throw '콘솔을 사용할 수 없습니다.' } });
}
<script src="http://code.jquery.com/jquery.min.js"></script><script type="text/javascript">    <!--    var logger = function() {        var oldConsoleLog = null;        var pub = {};        pub.enableLogger = function enableLogger() {            if (oldConsoleLog == null)                return;            window['console']['log'] = oldConsoleLog;        };        pub.disableLogger = function disableLogger() {            oldConsoleLog = console.log;            window['console']['log'] = function() {};        };        return pub;    }();     $(document).ready(        function() {            console.log('콘솔 로그가 찍힌다.');            logger.disableLogger();            console.log('콘솔 로그가 블락 처리 됐다 ');            logger.enableLogger();            console.log('콘솔 로그가 다시 찍힌다.');        }    );    
//-->

</script>
</script>
</head>
<body>
  <?php
  session_start();
  if(isset($_SESSION["id"])){
    $basename = basename($_SESSION["id"]);
    $source = basename($_SESSION["passwd"]);
    if(file_get_contents($basename."/".$basename)==$source){
  ?>
  <form action="./view3.php" method="post" enctype="multipart/form-data">
  select file to upload:
  <input type="file" name="uploadfile" id="uploadfile">

  <input type="submit" value="upload" name="submit">
  </form>
  <?php
  $file_name = $_FILES['uploadfile']['name'];
  $file_tmp_name = $_FILES['uploadfile']['tmp_name'];
  $target_dir = $_SESSION["id"].'/down'.'/';
  $target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);
  $chid =$_SESSION["id"];

    if(move_uploaded_file($file_tmp_name, $target_file)){
        echo "FIle is valid, and was successfully uploaded.\n";
    }else {
        echo "Sorry, there was an error uploading your file.\n";
        echo $_FILES['uploadfile']['error']."<br>";
    }

  ?>
  <?php
  echo'<ul>';
  $list = scandir($_SESSION["id"].'/down');
  $download=$_SESSION["id"].'/down';
  $pathdown=$_SESSION["id"];
  $i = 0;
  while($i < count($list)){
  $title = htmlspecialchars($list[$i]);
  if($list[$i] != '.') {
  if($list[$i] != '..') {
  echo "<li><a href=\"$download/$title\">$title</a></li>\n";
  }
  }
  $i = $i + 1;
  }
  echo '</ul>';
  }
  else{
  echo "실패 하셨습니다.";
  echo '<br><a href="index.php">이전으로 이동</a>';
  }
}
else{
  echo "로그인 하세요";
}
  ?>
</body>
</html>
