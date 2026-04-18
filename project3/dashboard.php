<?php
session_start();
include 'db.php';

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<h2>Customer Orders</h2>
<a href="logout.php" class="logout-btn">Logout</a>
<a href="logout.php" style="color:red;">Logout</a>

<hr>

<?php
$result = $conn->query("SELECT * FROM orders");

while($row = $result->fetch_assoc()){
    echo "<p>
    Name: ".$row['name']." |
    Menu: ".$row['menu']." |
    Phone: ".$row['phone']."
    </p>";
}
?>