<?php
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$state = $_POST['state'];
$image = $_POST['image'];
$message = $_POST['message'];

$conn = new mysqli('localhost', 'root', '', 'dreamcollege');
if($conn->connect_error){
    die('connection failed:' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into dreamcollege(name,email,mobile,state,image,message)
    values(?,?,?,?,?,?)") ;
    $stmt->bind_param("ssisss", $name, $email, $mobile,$state,$image, $message);
    $stmt->execute();
    header('Location: exam-deatail.html');
    $stmt->close();
    $conn->close();
}

?>