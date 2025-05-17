<?php
    session_start();
    $conn = mysqli_connect("sql12.freesqldatabase.com","sql12779399","kA4qNbKN3B","sql12779399");


    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $done = $_GET['done'];

        if($done=='F')
        {
            $query = "UPDATE todo SET done='T' WHERE id='$id'";
        }
        else if($done=='T')
        {
            $query = "UPDATE todo SET done='F' WHERE id='$id'";
        }
        
        if(mysqli_query($conn,$query))
        {
            header('Location: index.php');
            exit();
        }
    }
?>
