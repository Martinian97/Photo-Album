<?php
$c=0;

if ($_FILES["filename"]["size"]!=0)
{
	$name = $_FILES['filename']['name'];
	switch($_FILES['filename']['type'])
	{
		case 'image/jpeg': $ext = 'jpg'; break;
		case 'image/jpg': $ext = 'jpg'; break;
		default:
		$ext = '';
		break;
	}
	if ($ext)
	{
		$size = $_FILES['filename']['size'];
		if($size<200000)
		{
			while(file_exists("images/image$c.$ext"))
			$c++;
			if($c<10)
			{
				$n = "images/image$c.$ext";
				move_uploaded_file($_FILES['filename']['tmp_name'], $n);
				$c++;
				$message = "Image Uploaded!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				echo '<script type="text/javascript"> location.href = "album.php" </script>';
				
			}
			else
			{
				$message = "Max 10 photos allowed!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				echo '<script type="text/javascript"> location.href = "album.php" </script>';
			}
		}
		else
		{
			$message = "FILE SIZE LIMIT EXCEEDED";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo '<script type="text/javascript"> location.href = "album.php" </script>';
		}
	}
	else 
	{
		$message = "Invalid file type!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo '<script type="text/javascript"> location.href = "album.php" </script>';
	}
}

else 
{
	$message = "No image has been uploaded. Try Again.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo '<script type="text/javascript"> location.href = "new_upload.php" </script>'; 
}
echo <<<_END
<html>
<body>
<form action="album.php" method="post" onsubmit="return Check(this)">
	<input type="submit" value="Back to ALBUM">
</form>
<script>
	var _validFileExtensions = [".txt"]; 
	function Check(theForm)
	{
		var arrInputs = theForm.getElementsByTagName("input"); 
    		for (var i = 0; i < arrInputs.length; i++)
		{ 
			var oInput = arrInputs[i]; 
    			if (oInput.type == "file") 
			{ 
			        var sFileName = oInput.value; 
        			var blnValid = false; 
            			for (var j = 0; j < _validFileExtensions.length; j++) 
				{ 
                			var sCurExtension = _validFileExtensions[j]; 
                			if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) 
					{ 
                    				blnValid = true; 
                    				break; 
                   			} 
               			} 

                		if (!blnValid) 
				{ 
			                alert("Invalid file type!"); 
                			return false; 
                		} 
        		} 
    		} 
	return true; 
	} 
</script>
</body>
</html>
_END
?>
