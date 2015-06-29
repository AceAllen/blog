<?php
include('dbconnection.php');

$_POST["title"];
$_POST["content"];
$_POST["category"];

$sql = "INSERT INTO posts (title, content, category)
VALUES ('{$_POST["title"]}', '{$_POST["content"]}', '{$_POST["category"]}')";

if ($conn->query($sql) === TRUE) {
    header( 'Location: http://localhost/blog/allposts.php' ) ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>