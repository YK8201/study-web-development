<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>サンプルサイト</title>
    </head>
    <body>
        <?php
            $save = '/Applications/MAMP/htdocs/image/';
            $img = '/image/';
            if (isset($_FILES['file']) == true){
                echo $_FILES["file"]["name"].'<br/>';
                echo $_FILES["file"]["type"].'<br/>';
                echo $_FILES["file"]["tmp_name"].'<br/>';
                echo $_FILES["file"]["size"].'<br/>';
                $name = $_FILES["file"]["name"];
                move_uploaded_file($_FILES["file"]["tmp_name"],$save.$name);
                echo "<img src=".$img.$name.">";
            }
        ?>
        <form action="sample10.php" method="post" enctype="multipart/form-data">
            <input id="name" type="file" name="file">
            <input type="submit" value="送信する">
        </form>
    </body>
</html>