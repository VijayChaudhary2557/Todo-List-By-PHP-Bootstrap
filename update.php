<?php
    $conn = mysqli_connect('localhost','root','','php');

    $update = $_GET['update'];
    $id = $_GET['id'];


    if(isset($_GET['title']))
    {
        $title = $_GET['title'];
        echo "HJiiiiiiiiiii";
    }

    
    if($update=='No')
    {
        header("Location: index.php?id=$id&update=$update&title=$title");
        exit();
    }
    else
    {
        $title = $_POST['updateTask'];
        echo "$id<br>";
        echo "$title<br>";

        $query = "UPDATE todo SET title = '$title' WHERE id = $id";

        if(mysqli_query($conn,$query))
        {
            header('Location: index.php');
            exit();
        }
    }
?>