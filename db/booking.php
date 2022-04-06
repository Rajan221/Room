<?php
include("connect.php");
if(isset($_POST['date'])&&
isset($_POST['status'])
){  
    session_start();
    $user_id= $_SESSION['user_id'];
    $book_date= date('Y-m-d');
    $status = $_POST['status'];
    $checkin_date = $_POST['date'];
    

    $query = "INSERT INTO book( user_id, book_date, status, checkin_date) VALUES ('$user_id','$book_date','$status','$checkin_date')";
    
    if (mysqli_query($conn, $query)) {
        $msg = "Room booked";
        header('Location:../home.php?msg='.$msg);
    }
}
else{
    die("data cannot be accessed");
    header('Location:../home.php?msg='.$msg);
}

?>