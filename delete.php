<?php
    $conn = mysqli_connect('localhost','root','','php');

    $id = $_GET['id'];

    $query = "DELETE FROM todo WHERE id='$id'";

    mysqli_query($conn,$query);

    header('Location: index.php');
?>