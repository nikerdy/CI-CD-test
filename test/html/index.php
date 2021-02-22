<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>矩形面積計算</title>
    </head>
    <body >
        <h1>矩形面積計算</h1>
        <form action="index.php" method="post">
            長: <input size="10" type="test" name="length">
            寬: <input size="10" type="test" name="width">
            <input type="submit" value="計算">
        </form>
    </body>
</html>
<?php
    class run{
        function area_test($length,$width){
            if(is_numeric($length) && is_numeric($width)){
                $area = $length * $width;
                return  $area;
            }
            elseif(empty($length) && $length != 0){
                return "長度尚未輸入";
            }
            elseif(empty($width) && $width != 0){
                return "寬度尚未輸入";
            }
            else{
                return "輸入錯誤";
            }
        }
    }
    $run = new run();
    if(empty($_POST["length"]) && empty($_POST["width"])){
        echo "尚未輸入";
    }
    else{
        echo  "面積" . $run -> area_test($_POST["length"],$_POST["width"]);
    }
?>
