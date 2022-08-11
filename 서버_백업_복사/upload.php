
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        $chid = $_POST['id'];
            if($chid=="abcd1234"){
                echo '<form action="./upload.php" method="post" enctype="multipart/form-data">
                    select file to upload:
                    <input type="file" name="uploadfile" id="uploadfile">
                    <input type="submit" value="upload" name="submit">
                    </form>';
                echo'<ul>';
                    $list = scandir('./down/');
                    $i = 0;
                    while($i < count($list)){
                      $title = htmlspecialchars($list[$i]);
                      if($list[$i] != '.') {
                        if($list[$i] != '..') {
                          echo "<li><a href=\"down/$title\">$title</a></li>\n";
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
        ?>
    </body>
</html>
<?php
    
$file_name = $_FILES['uploadfile']['name'];
$file_tmp_name = $_FILES['uploadfile']['tmp_name'];
$target_dir = './down/';
$target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);
$chid = $_POST['id'];

    if(move_uploaded_file($file_tmp_name, $target_file)){
        echo "FIle is valid, and was successfully uploaded.\n";
    }else {
        echo "Sorry, there was an error uploading your file.\n";
        echo $_FILES['uploadfile']['error']."<br>";
    }

?>
