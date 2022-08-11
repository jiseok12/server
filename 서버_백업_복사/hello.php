
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
    echo "<article><pre>";
    echo htmlspecialchars(file_get_contents("data/".$basename));
    echo "</pre></article>";
  } else {
    echo "Hello";
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
    #main{
        margin:0px auto;
        overflow:scroll;
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
  ul{
  list-style:none;
  padding-left:0px;
  }
  #container{
    margin:0 auto;
  }
  article{
    width:90%;
    height: 99%;
    margin: 10px auto;
    padding:10px;
    border: 1px solid #ccc;
    overflow: scroll;
  }
  a {
    text-decoration: none;
    color:black;
  }
  @media(min-width:800px){
    section{
        margin: 0 auto;
        width: 1000px;
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
<a href="drive.php">Drive</a>
</li>

<li>
<a href="drive.php">글쓰기</a>
</li>

</ul>
</nav>
</header>
<section>
<div class="main">
<h2> <?php print_title(); ?></h2>
<div class="line">
<h3><?php print_description(); ?></h3>
</div>
</div>
</section>
</div>
</body>
</html>