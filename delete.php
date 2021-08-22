<?php include "db.php";
$connect = mysqli_connect('localhost', 'root', '', 'tasklist');

$id = $_GET['id'];

$query = "DELETE FROM task WHERE id = {$id} ";
$delete_query = mysqli_query($connect, $query);

if (!$delete_query) {
    die("QUERY FAILED" . " " . mysqli_error($connect));
}
header("location: index.php");
