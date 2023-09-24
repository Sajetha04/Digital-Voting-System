<?php
$link=mysqli_connect("localhost","root","","votelist");
if($link == false)
{
die ("ERROR: Could not connect.". mysqli_connect_error());
}
$sql1 = "INSERT INTO vote1(name,votefor)
values ('$_POST[name]','$_POST[votefor]')";
if (mysqli_query($link, $sql1)) 
{
 echo "record added successfully";
}
else {echo "Error". mysqli_error($link);}
mysqli_close($link);
?>