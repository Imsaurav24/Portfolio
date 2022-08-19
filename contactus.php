<?php
$conn=mysqli_connect("localhost","root","","portfolio");
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Subject=$_POST['Subject'];
$Message=$_POST['Message'];
$sql="insert into varun contact values('$Name','$Email','$Subject','$Message')";
$result= mysqli_query($conn,$sql);
if ($result) {
echo "submit";

}
?>