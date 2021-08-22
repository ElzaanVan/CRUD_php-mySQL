<!DOCTYPE html>
<?php include "db.php";
$connect = mysqli_connect('localhost', 'root', '', 'tasklist');
?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Todo List</title>
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <center>
                <h1>Update List</h1>
            </center>
            <div class="col-md-10 col-md-offset-1">
                <form method="post">
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        $query = "SELECT * FROM task WHERE id = {$id}";
                        $update_query = mysqli_query($connect, $query);

                        while ($row = mysqli_fetch_assoc($update_query)) {
                            $id = $row['id'];
                            $task_name = $row['task_name'];
                    ?>
                            <div class="form-group">
                                <label for="task">Task Name</label>
                                <input type="text" value="<?php echo $task_name; ?>" name="task" id="task" class="form-control" required>
                                <input type="submit" value="Update Task" name="send" id="send" class="btn btn-success btn-small mt-3">
                            </div>

                    <?php };
                    }

                    ?>
                    <?php //UPDATE QUERY
                    if (isset($_POST['send'])) {
                        $task = $_POST['task'];

                        $query = "UPDATE task SET task_name ='{$task}' WHERE id = '$id'";
                        $update_query = mysqli_query($connect, $query);

                        if (!$update_query) {
                            die("QUERY FAILED" . mysqli_error($connect));
                        }
                        header("location: index.php");
                    }
                    ?>




                </form>
            </div>

        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>