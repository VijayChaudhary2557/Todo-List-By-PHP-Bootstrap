<?php
    $conn = mysqli_connect("sql12.freesqldatabase.com","sql12779399","kA4qNbKN3B","sql12779399");

    $id = $_GET['id'];

    $query = "DELETE FROM todo WHERE id='$id'";

    mysqli_query($conn,$query);

    header('Location: index.php');
?>
