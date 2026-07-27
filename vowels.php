<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Enter a String:
        <input type="text" name="str">
        <button type="submit">Submit</button><br>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST["str"];
    $vowels = 0;
    $consonants = 0;

    $length = strlen($str);
    for ($i = 0; $i < $length; $i++) {
        $ch = strtolower($str[$i]);
        if ($ch >= 'a' && $ch <='z') {
            if ($ch == 'a' || $ch == 'e' || $ch == 'i' || $ch == 'o' || $ch == 'u') {
                $vowels++;
            } else {
                $consonants++;
            }
        }
    }

    $noofwords = str_word_count($str);




    echo"Vowels: {$vowels} <br>";
    echo"Consonants: {$consonants} <br>";
    echo"no of words: {$noofwords} <br>";

    // if($isPalindrome){
    //     echo"{$original} is a palindrome number";
    // }else{
    //     echo"{$original} is not a palindrome number";
    // }
}
?>