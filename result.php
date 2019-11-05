<?php
 $syllabus_ID= mysqli_real_escape_string($_POST['syllabus_id']);
    $university= mysqli_real_escape_string($_GET['university']);
echo $university;
$host="localhost";  
$username="5717g08";   
$word="9440";  
$db_name="5717f16dbg08";  
$connection=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");
echo "Database is connected"."<br>";
   
    $sql="select *
from
    syllabus a join instructor b on a.instructor_name=b.instructor_name
where
    syllabus_ID like '%$syllabus_ID%'
OR
    university_name like'%$university%';";
$q=mysqli_query($connection, $sql) or die ("ERROR: " .mysqli_error($connection) . " (query was $sql)");
?>
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
    width:40%;
    text-align:right;
}
.cell.mat {
    width:60%;
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
<table border="2" >
  <thead>
    <tr>
        <th>course_name</th>
        <th>Course_description</th>
	<th>university</th>
        <th>instructor_name</th>
	<th>department</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysqli_num_rows($q)==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $res = mysqli_fetch_assoc( $q ) ){
          echo "  <tr>
        <td>{$res['course_name']}</td>
        <td>{$res['course_description']}</td>
	<td>{$res['university_name']}</td>
	<td>{$res['instructor_name']}</td>
        <td>{$res['department']}</td>
    </tr>\n";
        }
      }
    ?>
  </tbody>
</table>
</div>
</div>
</body>
</html>

