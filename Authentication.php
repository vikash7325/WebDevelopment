<?php
 echo "<body background=\"image2.jpg\"></body>";
 echo " <p  align=\"center\" ><font size=\"+4\" color=\"#00FFFF\">
        <b>Student Information </b></p>";
 echo "</br>";
 echo "<a href=\"welcome.php\">Home</a>";
 echo "</br>";
 

$username=$_GET["username"];
$password=$_GET["password"];
$str1="user";
$str2="bvb";
if((strcasecmp($str1, $username)==0)&&((strcasecmp($str2, $password))==0))
{
   
   echo " <p  align=\"center\" ><font size=\"+4\" color=\"#00FFFF\">
        <b>Login successful </b></p>";
    echo "<p align=\"center\" ><form action=\"Administrator.php\" method=\"get\">
                     <input type=\"submit\" value=\"Continue\" 
                     style=\" width:150px;height:35px;\" background-color:\"yellow\"/> 
          </form></p>";
    
    
}
else
{
   echo " <p  align=\"center\" ><font size=\"+4\" color=\"#00FFFF\">
        <b>Login unsuccessful </b></p>";
   
    echo " <p align=\"center\" ><form action=\"Administratorauthentication.php\" method=\"get\">
                 <input type=\"submit\" value=\"retry\" 
                     style=\" width:150px;height:35px;\" background-color:\"yellow\"/>
                     
          </form></p>";
}
 

?>
