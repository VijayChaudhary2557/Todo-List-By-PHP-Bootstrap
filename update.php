<?php
    $conn = mysqli_connect("sql12.freesqldatabase.com","sql12779399","kA4qNbKN3B","sql12779399");

    $update = $_GET['update'];
    $id = $_GET['id'];


    if(isset($_GET['title']))
    {
        $title = $_GET['title'];
    }

    
    if($update=='No')
    {
        header("Location: index.php?id=$id&update=$update&title=$title");
        exit();
    }
    else
    {
        $title = $_POST['updateTask'];

        $query = "UPDATE todo SET title = '$title' WHERE id = $id";

        if(mysqli_query($conn,$query))
        {
            header('Location: index.php');
            exit();
        }
    }
?>
