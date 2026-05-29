<!DOCTYPE html>
<html>
<head>
    <title>Sum of Digits and Palindrome Check</title>
    <style>
        body {
            font-family: Arial;
            margin: 40px;
        }
        input, button {
            padding: 8px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h2>PHP Program to Find Sum of Digits and Check Palindrome</h2>

<form method="post">
    Enter a Number:
    <input type="number" name="num" required>
    <button type="submit">Check</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num = $_POST['num'];
    $original = $num;

    $sum = 0;
    $reverse = 0;

    // Finding sum of digits and reverse
    while ($num > 0) {
        $digit = $num % 10;
        $sum += $digit;

        $reverse = ($reverse * 10) + $digit;

        $num = (int)($num / 10);
    }

    echo "<h3>Results</h3>";
    echo "Entered Number: $original <br>";
    echo "Sum of Digits: $sum <br>";
    echo "Reversed Number: $reverse <br>";

    // Palindrome Check
    if ($original == $reverse) {
        echo "<b>$original is a Palindrome Number.</b>";
    } else {
        echo "<b>$original is NOT a Palindrome Number.</b>";
    }
}
?>

</body>
</html>