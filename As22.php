<!-- 22) Write the PHP code for displaying the server date and time. -->
<!DOCTYPE html>
<html>
<head>
	<title>Assignment 22</title>
	<style>
    	body{
        	background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7zKM1qS--OIK4EXtjbxjqGIjopxwdMKc-Jg&usqp=CAU");
            background-repeat:no-repeat;
			background-size:cover;
			color:white;
		}
		div{
			background-color: #f3e6e8;
			background-image: linear-gradient(315deg, #f3e6e8 0%, #d5d0e5 74%);
			border: 0;
			text-shadow: 0 0 4px aqua;
			font-family: "Times New Roman", serif;
			border-radius: 8px;
			box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
			font-size: 30px;
			justify-content: center;
			text-align: center;
			line-height: 2em;
			width:600px;
			padding: 3px;
		}
	
	</style>
</head>
<body>
<center>
<h1>Server Time & Date</h1>
<div>
<?php

echo "Today is " . date("d/m/Y") . "<br>";
echo "The time is " . date("h:i:sa");
?>
</div>
</center>
</body>
</html>