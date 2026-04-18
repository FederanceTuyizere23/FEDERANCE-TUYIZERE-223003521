<?php

$conn = new mysqli("localhost", "root", "", "student_db");

if ($conn->connect_error) {
    die("Connection failed");
}

/* BASIC INFO */
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];
$country = $_POST['country'];

/* HOBBIES */
$hobbies = "";
if(isset($_POST['hobbies'])){
    $hobbies = implode(",", $_POST['hobbies']);
}

/* QUALIFICATIONS */
$board1 = $_POST['board1'];
$percent1 = $_POST['percent1'];
$year1 = $_POST['year1'];

$board2 = $_POST['board2'];
$percent2 = $_POST['percent2'];
$year2 = $_POST['year2'];

$board3 = $_POST['board3'];
$percent3 = $_POST['percent3'];
$year3 = $_POST['year3'];

$board4 = $_POST['board4'];
$percent4 = $_POST['percent4'];
$year4 = $_POST['year4'];

/* COURSE */
$course = $_POST['course'];

/* INSERT INTO DATABASE */
$sql = "INSERT INTO students 
(fname,lname,day,month,year,email,phone,gender,address,city,pincode,state,country,hobbies,
board1,percent1,year1,board2,percent2,year2,board3,percent3,year3,board4,percent4,year4,course)
VALUES 
('$fname','$lname','$day','$month','$year','$email','$phone','$gender','$address','$city','$pincode','$state','$country','$hobbies',
'$board1','$percent1','$year1','$board2','$percent2','$year2','$board3','$percent3','$year3','$board4','$percent4','$year4','$course')";

/* EXECUTE */
if ($conn->query($sql) === TRUE) {
    echo "Registration Successful!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>