<html>
<head>
<title>Search page</title>
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
.cell {
    display:table-cell;
    vertical-align:middle;
    padding:1em;
}
.cell.nav {
    width:50%;
    text-align:right;
}
.cell.mat {
    width:50%;
}
.nav form {
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

.mat form {
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
  <td><li><a href="search.php"> Search</a></li></td>
</ul>
</table>
</div>
<div  style="background:#D3D3D3; width:800px; height:1080px;">
<h1 align="center"> Course Search Page</h1>
<div class="content">
<div class="cell nav">
		<form id='search' action='result.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Syllabus ID</legend>

<form method="POST" action="result.php">

    <td>Search by Syllabus Id</td>
    <td><input type="text" name="syllabus_id" value="<?php echo $syllabus_id;?>" /></td>
    <td><input type="submit" name="submit" value=" Find " /></td>
  </tr>
</table>
</form>
 
</fieldset>
</form>
</div>
        <div class="cell mat">
           <form action="result.php" method="GET">
<h3> Search by University</h3>
<select name="university">
  <option value="UNT">UNT</option>
  <option value="OSU">OSU</option>
  <option value="UC Berkeley">UC Berkeley</option>
  <option value="University of Arkansas">University of Arkansas</option>
</select>
<input type="submit" value="Find">
</form>
</div>
</div>
</body>
</html>
