<html>

<head>

</head>

<body>

<?php

include('php/dbconnection.php');

$sql = "SELECT id, title, content, category FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["title"]. " " . $row["content"]. " " . $row["category"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>

</body>

</html>