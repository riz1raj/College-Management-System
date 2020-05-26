<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
	<form method="POST" action="file_upload.php" enctype="multipart/form-data">
		<table>
	    <textarea name="create_complaint" rows="10" cols="30"> </textarea>
        <td><input type="submit" name="submit" value="Upload"></td>
	    </table>
	    </br>
	    or
	</br>

	       <tr>
				<td>File Uplaod:</td>
				<td><input type="file" name="photo"></td>
				<td><input type="submit" name="submit1" value="Upload"></td>
            </tr>

       

        
		</table>
	</br>
</br>
		<a href="parent_createcomplaint.php">Back</a>
	</form>
</body>
</html>