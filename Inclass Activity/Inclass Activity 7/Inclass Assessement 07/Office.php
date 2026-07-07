<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "Office";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Connection Failed";
} else {
    echo "Connected Successfully.<br>";
}

$sql = "CREATE TABLE IF NOT EXISTS System_Administrator(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(50),
    password VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
    echo "System Administrator table created successfully.<br>";
} else {
    echo "Error: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS Management_Assistant(
   id INT AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(100) NOT NULL,
   email VARCHAR(50),
   department VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Management Assistant table created successfully.<br>";
} else {
    echo "Error: " . $conn->error;
}

// Insert only if table is empty
$check = $conn->query("SELECT COUNT(*) AS total FROM System_Administrator");
$row = $check->fetch_assoc();

if ($row['total'] == 0) {
    $sql_insert = "INSERT INTO System_Administrator (name, email, password) VALUES
        ('Navitha', 'navitha@gmail.com', '1234'),
        ('Navindul', 'navindul@gmail.com', 'n1234'),
        ('Amara', 'amara@gmail.com', 'a2121'),
        ('kalana', 'kalana@gmail.com', 'k1243')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "System Administrator data inserted successfully.<br>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$check = $conn->query("SELECT COUNT(*) AS total FROM Management_Assistant");
$row = $check->fetch_assoc();

if ($row['total'] == 0) {
    $sql_insert = "INSERT INTO Management_Assistant (name, email, department) VALUES
        ('Nimal', 'nimal@gmail.com', 'HR'),
        ('Kamal', 'kamal@gmail.com', 'IT'),
        ('Sirimal', 'sirimal@gmail.com', 'health'),
        ('Heshan', 'heshan@gmail.com', 'Cyber')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "Management Assistant data inserted successfully.<br>";
    } else {
        echo "Error: " . $conn->error;
    }
}

if (isset($_GET['delete']) && isset($_GET['table'])) {
    $id = $_GET['delete'];
    $table = $_GET['table'];

    if ($table == "admin") {
        $conn->query("DELETE FROM System_Administrator WHERE id=$id");
    } elseif ($table == "assistant") {
        $conn->query("DELETE FROM Management_Assistant WHERE id=$id");
    }

    header("Location: Office.php");
    exit();
}
?>

<html>
<head>
    <title>Office Database Management System</title>
</head>

<body>
    <div style="border:1px solid black; padding:15px; margin-bottom:20px;">
        <h2>System Administrator</h2>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>

            <?php  
            $sql_select = "SELECT * FROM System_Administrator";
            $result = $conn->query($sql_select);

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>
                    <a href='edit_admin.php?id=".$row['id']."'>Edit</a>
                    <a href='Office.php?delete=".$row['id']."&table=admin'>Delete</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <div style="border:1px solid black; padding:15px; margin-bottom:20px;">
        <h2>Management Assistant Table</h2>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Action</th>
            </tr>

            <?php  
            $sql_select = "SELECT * FROM Management_Assistant";
            $result = $conn->query($sql_select);

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['department']."</td>";
                echo "<td>
                    <a href='edit_assistant.php?id=".$row['id']."'>Edit</a>
                    <a href='Office.php?delete=".$row['id']."&table=assistant'>Delete</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

<?php
$conn->close();
?>

</body>
</html>