<html>
<body>
<h1><center><b>VOTING LIST DETAILS</b></center></h1>
<?php
$a=mysqli_connect("localhost","root","","votelist");
if ($a==false){
die("error");
}
else{
echo "";
}
$sql="SELECT*FROM vote1";
if($result=mysqli_query($a,$sql)){
if(mysqli_num_rows($result)>0){
echo"<table border=1>";
echo"<tr>";
echo"<th>name</th>";
echo"<th>votefor</th>";
echo"</tr>";
while($row=mysqli_fetch_array($result)){
echo"<tr>";
echo"<td>",$row['name'],"</td>";
echo"<td>",$row['votefor'],"</td>";
echo"</tr>";
}
echo"</table>";
//close result set
mysqli_free_result($result);
}else{
echo"No records matching your query were found,";
}
}else{
echo"Error;could not able to execute $sql,",mysqli_error($a);
}
//close connection
mysqli_close($a);
?>
</body>
</html>