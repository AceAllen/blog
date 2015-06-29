<html>

<head>
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
</head>

<body>

<form action="php/makepost.php" method="post">
Post Title<input type="text" name="title"><br>
Post Content<textarea name="content"></textarea><br>
Post Category<input type="text" name="category"><br>

<input type="submit">
</form>


</body>

</html>