<!DOCTYPE html>
<html>
<head>
	<script src="<?php echo base_url(); ?>assets/js/tinymce/tinymce.min.js"></script>
	<script>tinymce.init({selector:'textarea'});</script>
</head>

<body>
	<form action="/inventory/index.php/upload/do_upload" method="post" enctype="multipart/form-data">
		<h3> ADD GALLERY AND EVENT</h3>
		<table>
			<tr>
				<td><font face=calibri size=2 style="line-height:300%">Name</td>
				<td>: <input type="text" name="name"></td>
			</tr>
			<tr>
				<td><font face=calibri size=2 style="line-height:300%">Title</td>
				<td>: <input type="text" name="title"></td>
			</tr>
			<tr>
				<td valign=top><font face=calibri size=2 style="line-height:300%">Content </td>
				<td><textarea name="content" style="width:100%"></textarea></td>
			</tr>
			<tr>
				<td><font face=calibri size=2 style="line-height:300%">Upload Image</td>
				<td>: <input type="file" name="userfile" size="20″>
			</tr>
			<tr>
				<td><input type=submit value="submit"></textarea></td>
			</tr>
		</table>
	</form>
</body>
</html>