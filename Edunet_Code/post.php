<?php


 session_start();
include 'connection.php';
 //$con=mysql_connect("localhost","root","uj231294");
 //mysql_select_db("Edunet");

 $course_name =mysql_real_escape_string($_POST["course_name"]);
 $title =mysql_real_escape_string($_POST["title"]);
 $question=mysql_real_escape_string($_POST["question"]);
 $email=$_SESSION['user_name'];

 $query="SELECT Firstname FROM End_User WHERE Email='$email'";
 $result=mysql_query($query);
 while($row=mysql_fetch_array($result))
 {
      $name=$row['Firstname'];
 }
$status=0;
$query2="INSERT INTO Question(Q_Text,Status,Course_Name,Email,Name) VALUES('$question','$status','$course_name','$email','$name')";
$result2=mysql_query($query2);
header('Location: course_room.php?y='."$course_name");
 


?>