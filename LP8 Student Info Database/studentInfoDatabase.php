<?php
// Step 1: Connect to the MySQL server
$conn = mysqli_connect("localhost", "root", "", "student_db");

// Step 2: Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 3: Create table if it doesn't exist
$create = "CREATE TABLE IF NOT EXISTS student_info (
    id     INT AUTO_INCREMENT PRIMARY KEY,
    usn    VARCHAR(20),
    name   VARCHAR(100),
    branch VARCHAR(50),
    email  VARCHAR(100),
    phone  VARCHAR(15)
)";
mysqli_query($conn, $create);

// Step 4: Insert data if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usn    = $_POST["usn"];
    $name   = $_POST["name"];
    $branch = $_POST["branch"];
    $email  = $_POST["email"];
    $phone  = $_POST["phone"];

    $sql = "INSERT INTO student_info (usn, name, branch, email, phone)
            VALUES ('$usn', '$name', '$branch', '$email', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully!<br><br>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!-- Step 5: HTML form to enter student details -->
<h2>Insert Student Details</h2>

<form method="POST" >
    USN:    <input type="text" name="usn"><br><br>
    Name:   <input type="text" name="name"><br><br>
    Branch: <input type="text" name="branch"><br><br>
    Email:  <input type="email" name="email"><br><br>
    Phone:  <input type="text" name="phone"><br><br>
    <input type="submit" value="Submit">
</form>

<br>

<?php
// Step 6: Write and execute a SELECT query
$sql    = "SELECT * FROM student_info";
$result = mysqli_query($conn, $sql);

// Step 7: Display results in an HTML table
echo "<h2>Student Records</h2>";

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>USN</th>
                <th>Name</th>
                <th>Branch</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["id"]     . "</td>
                <td>" . $row["usn"]    . "</td>
                <td>" . $row["name"]   . "</td>
                <td>" . $row["branch"] . "</td>
                <td>" . $row["email"]  . "</td>
                <td>" . $row["phone"]  . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

// Step 8: Close the connection
mysqli_close($conn);
?>