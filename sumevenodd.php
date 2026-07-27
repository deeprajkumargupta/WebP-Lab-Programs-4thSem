<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Enter lb:
        <input type="number" name="lb"><br>
        Enter ub:
        <input type="number" name="ub"><br>
        <button type="submit">Submit</button><br>
    </form>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $lb=$_POST["lb"];
        $ub=$_POST["ub"];
        $oddsum=0;
        $evensum=0;

        for($i=$lb;$i<=$ub;$i++){
            if($i%2==0){
                $evensum+=$i;
            }else{
                $oddsum+=$i;
            }
        }
        echo"Even Sum= {$evensum}";
        echo"Odd Sum= {$oddsum}";
    }
?>