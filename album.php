<?php
echo <<<_END
<html>
<style>
header{
    padding: 5em;
    color: black;
    background-color: #ADD8E6;
    clear: left;
    text-align: center;
}
</style>
<header>
   <h1>Welcome to Your Album</h1>
</header>
</html>
_END
?>
<?php
$c=0;
$t=0;
$ext="jpg";
while(file_exists("images/image$c.$ext"))
$c++;
$n="images/image$t.$ext";
echo <<<_END
<html>
<head>
<title>PHP Form Upload</title>
</head>
<body bgcolor="IndianRed">
<center>
<br>
<form action="new_upload.php" method="post">
	<input type="submit" value="UPLOAD IMAGE">
</form>
<script type="text/javascript">
	var i=0;
	function first()
	{
		var x = "images/image0.jpg";
		var img = document.getElementById("imageid");
		img.src = x;
		i=0;
	}

	function prev()
	{
		i--;
		i=i+$c;
		i=i%$c;
		var x = "images/image"+i+".jpg";
		var img = document.getElementById("imageid");
		img.src = x;
	}

	function next()
	{
		i++;
		i=i%$c;
		var x = "images/image"+i+".jpg";
		var img = document.getElementById("imageid");
		img.src = x;
	}

	function last()
	{
		var las = $c-1;
		var x = "images/image"+las+".jpg";
		var img = document.getElementById("imageid");
		img.src = x;
		i=las;
	}
	
	function logout()
	{
		location.href = "index.php";
	}
	
	

</script>
<div>

<button value="FIRST" onclick="first()">FIRST</button> 	 
<button value="PREV" onclick="prev()">PREV</button> 
<button value="NEXT" onclick="next()">NEXT</button> 
<button value="LAST" onclick="last()">LAST</button>


</div>
<br>
<button value="LOG OUT" onclick="logout()">LOG OUT</button>
</br><br>
<img id="imageid" src="images/image0.jpg" width=1000 height=500>	

</center>
</body>
</html>
_END
?>
