<html>

<head>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
</head>

<body>

<a href="#" class="new-post">New Post</a>
<a href="#" class="edit-post">Edit Post</a>
<a href="#">Delete Post</a>

<div class="make-post">
	<form action="php/makepost.php" method="post">
	Post Title<input type="text" name="title"><br>
	Post Content<textarea name="content"></textarea><br>
	Post Category<input type="text" name="category"><br>

	<input type="submit">
	</form>
	<a href="#" class="close">Close</a>
</div>

<div class="change-post">
<?php
//Include DB Connection
include('php/dbconnection.php');

//Select all post details
$sql = "SELECT id, title, content, category FROM posts";
$result = $conn->query($sql);

//Display the results
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
<a href="#" class="close">Close</a>
</div>

<script type="text/javascript">

$(document).ready(function() {
	//Hide the admin menu full options
	$(".make-post" ).hide();
	$(".change-post" ).hide();

	//Close the current section when clicked
	$(".close").click(function() {
		$(".close").parent().hide("slow");
	});

	//Display the options once an item is clicked
	$(".new-post" ).click(function() {
		$(".make-post").show("slow");
	});

	$(".edit-post" ).click(function() {
		$(".change-post").show("slow");
	});

});

</script>
</body>

</html>
