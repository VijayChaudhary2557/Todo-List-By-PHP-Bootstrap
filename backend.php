<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','php');

    if (isset($_POST["submit"]))
    {
        $title=$_POST['task'];
        
        $query = "INSERT INTO todo VALUES (DEFAULT ,'$title', 'F')";

        if(mysqli_query($conn,$query))
        {
            echo "QUERRY RUN";
            header('Location: index.php');
            exit();
        }
        else
            echo "NOT RUN";
    }
    else
        echo "Nothing";
?>