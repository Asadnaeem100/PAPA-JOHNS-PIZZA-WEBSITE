<?php

include 'header.php';
include 'db.php';

?>

<!-- Contact Page Coding Start -->

<?php

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $select = $_POST['select'];
    $description = $_POST['description'];

    $query = "INSERT INTO `asad_restaurant`(`email`, `menu`, `description`) VALUES ('$email','$select','$description')";
    $run = mysqli_query($conn, $query);
    if($run){
        echo "<script>alert('We Received your Review');window.location.href='index.php';</script>";
    }
    else{
        echo "Sorry Something Went Wrong";
    }
}

?>

<!-- Contact Page Coding End -->