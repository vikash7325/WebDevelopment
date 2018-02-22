<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
         <p  align="center" ><font size="+4" color="#00FFFF">
        <b>Student Information </b></p>
        
        <a href="welcome.php">Home</a>
        
        <p><marquee> Student details</marquee></p><br />
        
        
</select>

    </head>
    <body background ="image2.jpg">
<?php

     $student= $_GET["searchusn"];
     $con=mysql_connect("localhost","root", "") or die(mysql_error());
     mysql_select_db("studentinformation") or die(mysql_error());
     $query="SELECT * FROM bvbsims WHERE usn='$student'";
     $result=mysql_query($query,$con)or die(mysql_error());
         
     while($row = mysql_fetch_array($result)){
             $str=$row['name'];
             echo"<h1> $str </h1>";
             $str1=$row['usn'];
             echo"<h1> $str1 </h1>";
             $str2=$row['department'];
             echo"<h1> $str2 </h1>";
             $sub1=$row['subject1'];
             $sub2=$row['subject2'];
             $sub3=$row['subject3'];
             $sub4=$row['subject4'];
             $marks1=$row['marks1'];
             $marks2=$row['marks2'];
             $marks3=$row['marks3'];
             $marks4=$row['marks4'];
             $attendance1=$row['attendance1'];
             $attendance2=$row['attendance2'];
             $attendance3=$row['attendance3'];
             $attendance4=$row['attendance4'];
             $averageattendance1=$row['AverageAttendance1'];
             $averageattendance2=$row['AverageAttendance2'];
             $averageattendance3=$row['AverageAttendance3'];
             $averageattendance4=$row['AverageAttendance4'];
             $highestattendance1=$row['HighestAttendance1'];
             $highestattendance2=$row['HighestAttendance2'];
             $highestattendance3=$row['HighestAttendance3'];
             $highestattendance4=$row['HighestAttendance4'];
             $sub1average=$row['Sub1Average'];
             $sub2average=$row['Sub2Average'];
             $sub3average=$row['Sub3Average'];
             $sub4average=$row['Sub4Average'];
             $highestmarks1=$row['HighestMarks1'];
             $highestmarks2=$row['HighestMarks2'];
             $highestmarks3=$row['HighestMarks3'];
             $highestmarks4=$row['HighestMarks4'];
             echo"<table align='center' border='2'>
                 <tr>
                      <td>Subject</td>
                      <td>Marks</td>
                      <td>SubjectAverage</td>
                      <td>HighestMarks</td>
                      <td>Attendance</td>
                      <td>ClassAverage</td>
                      <td>HighestAttendance</td>
                     
                 </tr>
                 <tr>
                      <td>$sub1</td>
                      <td>$marks1</td>
                      <td>$sub1average</td>
                      <td>$highestmarks1</td>
                      <td>$attendance1</td>
                      <td>$averageattendance1</td>
                      <td>$highestattendance1</td>
                 </tr>
                <tr>
                      <td>$sub2</td>
                      <td>$marks2</td>
                      <td>$sub2average</td>
                      <td>$highestmarks2</td>
                      <td>$attendance2</td>
                      <td>$averageattendance2</td>
                      <td>$highestattendance2</td>
                 </tr>
             <tr>
                      <td>$sub3</td>
                      <td>$marks3</td>
                      <td>$sub3average</td>
                      <td>$highestmarks3</td>
                      <td>$attendance3</td>
                      <td>$averageattendance3</td>
                      <td>$highestattendance3</td>
                      
             </tr>
             <tr>
                      <td>$sub4</td>
                      <td>$marks4</td>
                      <td>$sub4average</td>
                      <td>$highestmarks4</td>
                      <td>$attendance4</td>
                      <td>$averageattendance4</td>
                      <td>$highestattendance4</td>
                 </tr>
             </table>";
        }
    
    
    
?>
    </body>
</html>
