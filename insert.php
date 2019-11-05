<?php
$host="localhost";  
$username="5717g08";   
$word="9440";  
$db_name="5717f16dbg08";  
$connection=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string 
echo "Database is connected"."<br>";
$xml = simplexml_load_file('final.xml') or die("ERROR: Cannot create SimpleXML object");
echo "Xml file is loaded"."<br>";
$i=0;
foreach($xml ->Syllabus as $Syllabus){
$syllabus_ID = mysqli_real_escape_string($connection,$Syllabus->syllabus_ID);
$U_Name = $Syllabus->University_Name;
$C_Name = $Syllabus->Course_Name;
$Field = $Syllabus->Field;
$Dept = $Syllabus->Department;
$Course_Level = $Syllabus->Course_Level;
$Course_Description = mysqli_real_escape_string($connection, $Syllabus->Course_Description);
$Instructor_Name = $Syllabus->Instructor_Name;
$Instructor_email = $Syllabus->Instructor_email;
$Course_Requirements = mysqli_real_escape_string($connection, $Syllabus->Course_Requirements);
$sqlquery = "INSERT INTO syllabus (syllabus_ID, course_name, course_level, course_requirements , course_description, university_name,instructor_name) VALUES 
	('$syllabus_ID','$C_Name', '$Course_Level','$Course_Requirements', '$Course_Description', '$U_Name','$Instructor_Name')";
mysqli_query($connection, $sqlquery) or die ("ERROR: " .mysqli_error($connection).$sqlquery);
$sqlquery2 = "INSERT INTO instructor (instructor_name, department, college, email_address) VALUES 
	( '$Instructor_Name','$Dept', '$U_Name','$Instructor_email' )";
mysqli_query($connection, $sqlquery2) or die ("ERROR: " .mysqli_error($connection).$sqlquery2);
$i++;
}	
echo "Number of Records inserted into the database: ".$i."</br>";
?>
