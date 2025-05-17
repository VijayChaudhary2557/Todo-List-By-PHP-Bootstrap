<?php
    session_start();
    $conn = mysqli_connect("sql12.freesqldatabase.com","sql12779399","kA4qNbKN3B","sql12779399");
    
    $query = "SELECT * FROM todo";

    $result = mysqli_query($conn,$query);

    if($row = mysqli_num_rows($result) > 0)
    {
        $fetch=true;
        $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
    }
    else
    {
        $fetch=false;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .addTask {
            margin: 10px;
        }
        .container {
            margin-top: 20px;
        }
        .btnIcon {
            border: 3px solid white;
            width: 45px;
            height: 40px;
            text-align: center;
            padding-top: 8px;
            color: white;
        }
        td {
            font-size: 20px;
        }
        .strike {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <h1 class="text-center"><u>Todo List</u></h1>
    <div class="container border border-dark rounded">
        <form action="backend.php" method="post">
            <div class="mb-3 mt-3">
                <label for="task" class="form-label">Task:</label>
                <input type="text" class="form-control taskField" id="inputTask" placeholder="Enter your task..." name="task">
                <button type="submit" class="btn btn-warning addTask" name='submit'>Add Task</button>
            </div>
        </form>
        <?php
            if(isset($_GET['update']) && $_GET['update']=='No')
            {
                $upid = $_GET['id'];
        ?>
            <form action="update.php?id=<?php echo $upid ?>&update=Yes" method="post">
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" name="updateTask" placeholder="Update Your Task..." value="<?php echo isset($_GET['title']) ? $_GET['title'] : '' ?>">
                    <button type="submit" class="btn btn-success addTask" name='updateBTN'>Update Task</button>
                </div>
            </form>
        <?php
            }
        ?>
    </div>
    <div class="container ">
    <table class="table table-striped table-dark">
      <thead>
        <tr>
            <?php if($fetch){ ?>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Done</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
           <?php }?>
        </tr>
      </thead>
      <tbody>
        <?php if($fetch){ 
            
            $i=1;

            foreach ($arr as $x)
            {
        ?>
            <tr>
              <th scope="row"><?php echo $i; ?></th>
              <td class="<?php echo ($x['done']=='T') ? 'strike' : ''; ?>"><?php echo $x['title'] ?></td>
              <td><a href="check.php?id=<?php echo $x['id']; ?>&done=<?php echo $x['done']; ?>"><i class="btnIcon btn btn-primary fa-solid fa-check-double"></i></a></td>
              <td><a href="update.php?id=<?php echo $x['id']; ?>&update=No&title=<?php echo $x['title'] ?>"><i class="btnIcon btn btn-danger fa-solid fa-pen-nib"></i></a></td>
              <td><a href="delete.php?id=<?php echo $x['id']; ?>"><i class="btnIcon btn btn-warning fa-solid fa-trash"></i></a></td>
            </tr>
            <?php $i++; ?>
        <?php }}?>

      </tbody>
    </table>
    </div>
</body>
</html>
