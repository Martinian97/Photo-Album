<?php
echo <<<_END
<html>
<head>
<title>PHP Form Upload</title>
</head>

<style>
header
{
    padding: 5em;
    color: black;
    background-color: #ADD8E6;
    clear: left;
    text-align: center;
}
</style>
<header>
   <h1>Upload Your Image</h1>
</header>
<body bgcolor="IndianRed">
<form method='post' action='upload.php' enctype='multipart/form-data'>
<center>
<br>
Select a JPG File:
<input type='file' name='filename' size='10' />
<input type='submit' value='Upload' />
</center>
</form>
</body>
</html>
_END;
?>
