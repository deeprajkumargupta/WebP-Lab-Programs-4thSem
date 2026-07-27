<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Enter a number:
        <input type="number" name="num">
        <button type="submit">Submit</button><br>
    </form>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num=$_POST["num"];

        $original=$num;
        $reverse=0;
        $isPrime=true;

        if($num<2){
            $isPrime=false;
        }else{
            for($i=2;$i<$num;$i++){
            if($num%$i==0){
                $isPrime=false;
                break;
            }
        }
        }
        while($num!=0)
        {
            $digit=$num%10;
            $reverse= ($reverse*10)+ $digit;

            $num=(int)($num/10);
        }

        echo"Original Number: {$original} <br>";
        echo"Reversed Number: {$reverse} <br>";

        if($isPrime){
            echo"{$original} is a Prime number";
        }else{
            echo"{$original} is not a Prime number";
        }
    }
?>