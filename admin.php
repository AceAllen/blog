<html>

<head>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>

<body>

<a href="#" class="new-post">New Post</a>
<a href="#">Edit Post</a>
<a href="#">Delete Post</a>

<div class="make-post">
	<form action="php/makepost.php" method="post">
	Post Title<input type="text" name="title"><br>
	Post Content<textarea name="content"></textarea><br>
	Post Category<input type="text" name="category"><br>

	<input type="submit">
	</form>
</div>

<div class="edit-post">
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
</div>

<script type="text/javascript">

$(document).ready(function() {
	$(".make-post" ).hide();
});

	$(".new-post" ).click(function() {
		$(".make-post").show("slow");
	});


</script>
</body>

</html>
