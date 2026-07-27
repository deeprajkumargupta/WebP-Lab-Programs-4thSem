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
        $sum=0;
        $reverse=0;
        $isPalindrome=false;

        while($num!=0)
        {
            $digit=$num%10;
            $reverse= ($reverse*10)+ $digit;
            $sum=$sum+$digit;

            $num=(int)($num/10);
        }
        if($original==$reverse){
            $isPalindrome=true;
        }

        echo"Original Number: {$original} <br>";
        echo"Reversed Number: {$reverse} <br>";
        echo"Sum: {$sum} <br>";

        if($isPalindrome){
            echo"{$original} is a palindrome number";
        }else{
            echo"{$original} is not a palindrome number";
        }
    }
?>