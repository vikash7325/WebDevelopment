<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <p>following are the entry in the database with this entry</p><br />
        
        
</select>

    </head>
    <body>
<?php
    
    $highestmarks1=0;
    $highestmarks2=0;
    $highestmarks3=0;
    $highestmarks4=0;
    $highestattendance1=0;
    $highestattendance2=0;
    $highestattendance3=0;
    $highestattendance4=0;
    $classattendance1=0;
    $classattendance2=0;
    $classattendance3=0;
    $classattendance4=0;
    $sub1average=0;
    $sub2average=0;
    $sub3average=0;
    $sub4average=0;
    $name= $_GET["myname"];
    $usn= $_GET["myusn"];
    $dept= $_GET["mydept"];
    $sub1= $_GET["mysub1"];
    $marks1= $_GET["mymarks1"];
    $attendance1= $_GET["myattendance1"];
    $sub2= $_GET["mysub2"];
    $marks2= $_GET["mymarks2"];
    $attendance2= $_GET["myattendance2"];
    $sub3= $_GET["mysub3"];
    $marks3= $_GET["mymarks3"];
    $attendance3= $_GET["myattendance3"];
    $sub4= $_GET["mysub4"];
    $marks4= $_GET["mymarks4"];
    $attendance4= $_GET["myattendance4"];
    $con=mysql_connect("localhost","root", "") or die(mysql_error());
    mysql_select_db("studentinformation") or die(mysql_error());
    $query1=("SELECT * FROM bvbsims");
    $result1=  mysql_query($query1,$con) or die(mysql_error());
    $query = ("INSERT INTO bvbsims(name,usn,department,subject1,subject2,subject3,subject4,marks1,marks2,
             marks3,marks4,attendance1,attendance2,attendance3,attendance4,AverageAttendance1,
             AverageAttendance2,AverageAttendance3,AverageAttendance4,HighestAttendance1,HighestAttendance2,
             HighestAttendance3,HighestAttendance4,Sub1Average,Sub2Average,Sub3Average,Sub4Average,
             HighestMarks1,HighestMarks2,HighestMarks3,HighestMarks4)
             values('$name','$usn','$dept','$sub1','$sub2','$sub3','$sub4','$marks1','$marks2','$marks3',
             '$marks4','$attendance1','$attendance2','$attendance3','$attendance4','$classattendance1',
            '$classattendance2','$classattendance3','$classattendance4','$highestattendance1',
            '$highestattendance2','$highestattendance3','$highestattendance4','$sub1average',
            '$sub2average','$sub3average','$sub4average','$highestmarks1','$highestmarks2',
            '$highestmarks3','$highestmarks4')");  
     $result = mysql_query($query,$con) or die(mysql_error());
     
     
    $query1=("SELECT * FROM bvbsims");
    $result1=  mysql_query($query1,$con) or die(mysql_error());
    $query2=("SELECT AVG(marks1) FROM bvbsims");
    $result2=  mysql_query($query2,$con) or die(mysql_error());
    while($row = mysql_fetch_array($result2)){
	$sub1average=$row['AVG(marks1)'];
    }
    $query3=("SELECT AVG(marks2) FROM bvbsims");
    $result3=  mysql_query($query3,$con) or die(mysql_error());
    while($row = mysql_fetch_array($result3)){
	$sub2average=$row['AVG(marks2)'];
    }
    $query4=("SELECT AVG(marks3) FROM bvbsims");
    $result4=  mysql_query($query4,$con) or die(mysql_error());
    while($row = mysql_fetch_array($result4)){
	$sub3average=$row['AVG(marks3)'];
    }
    $query5=("SELECT AVG(marks4) FROM bvbsims");
    $result5=  mysql_query($query5,$con) or die(mysql_error());
    while($row = mysql_fetch_array($result5)){
	$sub4average=$row['AVG(marks4)'];
    }
    
    
    
    $query6=("SELECT AVG(attendance1) FROM bvbsims");
    $result6=  mysql_query($query6,$con) or die(mysql_error());
    while($row = mysql_fetch_array($result6)){
	$classattendance1=$row['AVG(attendance1)'];
    }
    $query7=("SELECT AVG(attendance2) FROM bvbsims");
    $result7=  mysql_query($query7,$con) or die(mysql_error());
    while($row = mysql_fetch_array($result7)){
	$classattendance2=$row['AVG(attendance2)'];
    }
    $query8=("SELECT AVG(attendance3) FROM bvbsims");
    $result8=  mysql_query($query8,$con) or die(mysql_error());
    while($row = mysql_fetch_array($result8)){
	$classattendance3=$row['AVG(attendance3)'];
    }
    $query9=("SELECT AVG(attendance4) FROM bvbsims");
    $result9=  mysql_query($query9,$con) or die(mysql_error());
    while($row = mysql_fetch_array($result9)){
	$classattendance4=$row['AVG(attendance4)'];
    }
    
    
    
    
    $query10=("SELECT MAX(attendance1) FROM bvbsims");
    $result10=  mysql_query($query10,$con) or die(mysql_error());
    while($row = mysql_fetch_array($result10)){
	$highestattendance1=$row['MAX(attendance1)'];
    }
    $query11=("SELECT MAX(attendance2) FROM bvbsims");
    $result11=  mysql_query($query11,$con) or die(mysql_error());
    while($row = mysql_fetch_array($result11)){
	$highestattendance2=$row['MAX(attendance2)'];
    }
    $query12=("SELECT MAX(attendance3) FROM bvbsims");
    $result12=  mysql_query($query12,$con) or die(mysql_error());
    while($row = mysql_fetch_array($result12)){
	$highestattendance3=$row['MAX(attendance3)'];
    }
    $query13=("SELECT MAX(attendance4) FROM bvbsims");
    $result13=  mysql_query($query13,$con) or die(mysql_error());
    while($row = mysql_fetch_array($result13)){
	$highestattendance4=$row['MAX(attendance4)'];
       
    }
    
    
    
    
    
    $query14=("SELECT MAX(marks1) FROM bvbsims");
    $result14=  mysql_query($query14,$con) or die(mysql_error());
    while($row = mysql_fetch_array($result14)){
	$highestmarks1=$row['MAX(marks1)'];
    }
    $query15=("SELECT MAX(marks2) FROM bvbsims");
    $result15=  mysql_query($query15,$con) or die(mysql_error());
    while($row = mysql_fetch_array($result15)){
	$highestmarks2=$row['MAX(marks2)'];
    }
    $query16=("SELECT MAX(marks3) FROM bvbsims");
    $result16=  mysql_query($query16,$con) or die(mysql_error());
    while($row = mysql_fetch_array($result16)){
	$highestmarks3=$row['MAX(marks3)'];
    }
    $query17=("SELECT MAX(marks4) FROM bvbsims");
    $result17=  mysql_query($query17,$con) or die(mysql_error());
    while($row = mysql_fetch_array($result17)){
	$highestmarks4=$row['MAX(marks4)'];
    }
     $queryupdate =("UPDATE bvbsims SET AverageAttendance1='$classattendance1',AverageAttendance2='$classattendance2'
            ,AverageAttendance3='$classattendance3',AverageAttendance4='$classattendance4'");
     $resultupdate = mysql_query($queryupdate,$con) or die(mysql_error());
     
     $queryupdateavgsub =("UPDATE bvbsims SET Sub1Average='$sub1average',Sub2Average='$sub2average'
            ,Sub3Average='$sub3average',Sub4Average='$sub4average'");
     $resultavgsub = mysql_query($queryupdateavgsub,$con) or die(mysql_error());
     
     
      $queryupdatehighestmarks =("UPDATE bvbsims SET HighestMarks1='$highestmarks1',HighestMarks2='$highestmarks2'
            ,HighestMarks3='$highestmarks3',HighestMarks4='$highestmarks4'");
     $resulthighestmarks = mysql_query($queryupdatehighestmarks,$con) or die(mysql_error());
     
     
     $queryupdatehighestattendance =("UPDATE bvbsims SET HighestAttendance1='$highestattendance1',HighestAttendance2='$highestattendance2'
            ,HighestAttendance3='$highestattendance3',HighestAttendance4='$highestattendance4'");
     $resulthighestattendance = mysql_query($queryupdatehighestattendance,$con) or die(mysql_error());
    
?>
          <form name  ="myform" action="Administrator.php" method="get">
                     
                     <input type="submit" value="Back" /> 
                     
              </form>
        
        <form name  ="myform" action="enterstudentusn.php" method="get">
                     
                     <input type="submit" value="View" /> 
                     
              </form>
    </body>
</html>
