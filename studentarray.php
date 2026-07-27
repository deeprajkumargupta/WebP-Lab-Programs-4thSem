<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Enter USN:
        <input type="text" name="usn">
        Enter Name:
        <input type="text" name="name">
        Enter Branch:
        <input type="text" name="branch">
        <button type="submit">Submit</button><br>
    </form>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $usn=$_POST["usn"];
        $name=$_POST["name"];
        $branch=$_POST["branch"];

        $students=array();

        $student=array("USN"=>$usn, "Name"=>$name,"Branch"=>$branch);

        array_push($students,$student);

        foreach($students as $student){
            echo"STudent name: {$student["Name"]}";
        }
    }
?>