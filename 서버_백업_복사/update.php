<?php
function print_title(){
  if(isset($_GET['id'])){
    echo $_GET['id'];
  } else {
    echo "Welcome";
  }
}
function print_description(){
  if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  } else {
    echo "Hello, PHP";
  }
}
function print_list(){
  $list = scandir('./data');
  $i = 0;
  while($i < count($list)){
    if($list[$i] != '.') {
      if($list[$i] != '..') {
        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
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
    <title>수정</title>
    <style>
        body{
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: green;
        }
        .wrapper{
            font-family: system-ui, serif;
            padding: 1rem;
            border-radius: 1rem;
            background: white;
	    width= 100%;
        }
    </style>
  </head>
  <body>
    <div class="wrapper">
    <h1><a href="index.php">Main</a></h1>
    <h2>
     <form action="update_process.php" method="post">
       <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
       <p>
         <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
       </p>
       <p>
         <textarea name="description" placeholder="Description" cols=100% rows=100%><?php print_description(); ?></textarea>
       </p>
       <p>
         <input type="submit">
       </p>
     </form>
     </div>
  </body>
</html>