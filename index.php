<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width-device-width, initial-scale=1, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content	>
	
	<title>Exam Score</title>
<style type="text/css">
	
	nav{
	height: 47px;
	position: relative;
	background: #002b5e;
	margin: 0px;

}
nav ul{
	list-style: none;
	display: flex;
	

}

 nav ul li a{
	display: inline-block;
	color: white;
	padding: 0 40px;
	line-height: 46px;
	border-left: 1px solid white;

	
	
}
li>.sub-nav a {
    	
    	font-size: 11px;
}
.sub-nav a {
    	background: #ffdd00;
   	position: relative;
   	
  	display: inline-block;
	left: 680px;
    	
    	text-align: center;
    	color: #222222;
    	text-transform: capitalize;
}
.sub-nav a:before {
    	content: '';
   		border-style: solid;
    	display: inline-block;
    	vertical-align: middle;
    	margin-right: 5px;
		border-style: solid;
    	border-width: 24px 19px 23px 0;
    	border-color: transparent #ffdd00 transparent transparent;
    	position: absolute;
    	left: -19px;
}
.head{
	color: red;
	font-family: cursive;
}



</style>

</head>
<body>

	<center>
		<h1 class="head">Exam Score Management</h1>
		<br>
		<nav>
		<ul class="index">
			<li><a href="add.php" style="text-decoration:none"><font face="sans-serif" size="4">Add</font></a></li>
		
		<li><a href="view.php"style="text-decoration:none"><font face="sans-serif" size="4">View</font></a></li>

		<li class="sub-nav"><a href="display.php" style="text-decoration:none"><font face="sans-serif" size="4">Display based on various factors</font></a></li>
		</ul>
		</nav>
	</center>

	
</body>
</html>