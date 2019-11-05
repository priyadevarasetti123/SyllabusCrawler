<html>
<head>
<title>Registration complete Page</title>
<style>
body {
   
  background: url(bg.jpg) no-repeat center fixed;
  background-attachment: fixed;
  background-size: cover;
  overflow-y: scroll padding-bottom:10px;
  
}
.layer{
	max-width:70em;
	margin:0 auto;
}

ul.header {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	top:200px;

}

li {
    float: left;
}

li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
	}
.content {
    display:table;
    width:100%;
    font-size:16pt;
    background:#fff;
}
form {
    display:inline-table;
    list-style-type:square;
    border:8px ridge chocolate;
    box-shadow:10px 10px 5px #888;
    background-repeat:no-repeat;
    background-size:100% 100%;
    text-align:left;
    padding:.75em 1em .75em 2em;
    margin:.5em 0;
	color: black;
}


</style>

</head>
<body background : url(bg.jpg) >
<img src="logo.jpg" class="logo" style="float:right;width:50px;height:50px">
<div class="layer">
<div align='center' style="background-color:#D3D3D3; width:800px;"> 
<table>
<ul class="header">
  <td><li><a class="active" href="index.html">Login</a></li><td>
</ul>
</table>
</div>
<div  style="background:#D3D3D3; width:800px; height:1080px;">
<h1 align="center"> Registration Completed</h1>
<div class="content" align="center" >
<img src="thanks.jpg" style="width:800px">
<h3 align= "center" color="Blue"> Thank you for Registering in our website</h3>
<? php
echo $_POST['fname'];
?> 
</div>
</div>
</div>
</body>
</html>
