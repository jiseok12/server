<!DOCTYPE html>
<html>
        <body>
                <form action="./uploads.php" method="post" enctype="multipart/form-data">
                        select file to upload:
                <input type="file" name="uploadfile" id="uploadfile">
                <input type="submit" value="upload" name="submit">
                </form>
        </body>
</html>


<?php
$file_name = $_FILES['uploadfile']['name'];
$file_tmp_name = $_FILES['uploadfile']['tmp_name'];
$target_dir = './upload/';
$target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);

if(move_uploaded_file($file_tmp_name, $target_file)){
        echo "FIle is valid, and was successfully uploaded.\n";
}else {
        echo "Sorry, there was an error uploading your file.\n";
        echo $_FILES['uploadfile']['error']."<br>";
}

?>
