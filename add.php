<?php include "db.php";
$connect = mysqli_connect('localhost', 'root', '', 'tasklist');
?>

<?php
if (isset($_POST['send'])) {
    $task_name = $_POST['task'];

    $query = "INSERT INTO task (task_name) VALUES ('$task_name') ";
    $insert_query = mysqli_query($connect, $query);

    if (!$insert_query) {
        die("QUERY FAILED") . " " . mysqli_error($connect);
    }
    header("location: index.php");
}
