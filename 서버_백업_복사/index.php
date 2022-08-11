<?php
$path = "sample/path/newfolder";
if (!file_exists($path)) {
    mkdir($path, 0777, true);
}
?>
<?php
function print_title(){
  if(isset($_GET['id'])){
    echo htmlspecialchars($_GET['id']);
  } else {
    echo "Welcome";
  }
}
function print_description(){
  if(isset($_GET['id'])){
    $basename = basename($_GET['id']);
    echo htmlspecialchars(file_get_contents("data/".$basename));
  } else {
    echo "Hello";
  }
}
function print_list(){
  $list = scandir('./data');
  $i = 0;
  while($i < count($list)){
    $title = htmlspecialchars($list[$i]);
    if($list[$i] != '.') {
      if($list[$i] != '..') {
        echo "<div id=\"board\"><article><h1><a href=\"hello.php?id=$title\">$title</a></h1><p>\n";
        $gh = basename($title);
        echo htmlspecialchars(file_get_contents("data/".$gh));
        echo "</p></article></div>";
      }
    }
    $i = $i + 1;
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ji</title>
<style>
  #board{
    word-break:break-all;
    overflow: hidden;
  }
  #box1{
    width:100px;
    margin:10px;
    animation:rotatebo 2.5s infinite 9s;
  }

  @keyframes rotatebo {
    from{transform: perspective(200px) rotateY(0deg);}
    50%{transform: perspective(200px) rotateY(-180deg);}
    to{transform: perspective(200px) rotateY(-360deg);}
  }
  .navi{
    width:100%;
    height:60px;
    border-bottom:2px solid #ccc;
  }
  .navi ul{
    list-style: none;
    padding-top: 10px;
    padding-bottom:5px;
  }

  .navi ul li{
    display: inline-block;
    width: 60px;
    padding: 10px;
  }
  #container{
    margin:0 auto;
  }
  article{
    width:90%;
    height: 90px;
    margin: 10px auto;
    padding:10px;
    border: 1px solid #ccc;
    overflow: hidden;
  }
  a {
    text-decoration: none;
    color:black;
  }
  p{
    margin: 0 auto;
  }
  ul{
  list-style:none;
  padding-left:0px;
  }
  footer{
    text-align: center;
    width:100%;
  }
  @media(min-width:800px){
    section{
      margin: 0 auto;
      width: 800px;
      height: 90px;
    }
  }
</style>

</head>

<body>
<div id="container">
<header>
<div id="box1">
<h1><a href="index.php">JIseok</a></h1>
</div>

<nav class="navi">
<ul>
<li>
<a href="index.php">Main</a>
</li>

<li>
<a href="login.html">Drive</a>
</li>

<li>
<a href="create.php">글쓰기</a>
</li>

<li>
<a href="drive.php">공용</a>
</li>

</ul>
</nav>
</header>

<div class="main">
<section>
<?php print_list();?>
</section>

<div>
<footer>
<?php if(isset($_GET['id'])) { ?>
<a href="update.php?id=<?=$_GET['id']?>">수정</a>
<form action="delete_process.php" method="post">
<input type="hidden" name="id" value="<?=$_GET['id']?>">
<input type="submit" value="삭제">
</form>
<?php } ?>
</footer>
</div>
</div>
</div>
</body>
</html>
