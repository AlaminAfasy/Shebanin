
<?php
$dbhost="localhost";
$dbuser="generics_shebanindb";
$dbpass="ZSFHl-87,jhG-Ghn6bhcdjj%4%ZSFHl-87,jhG-dGhn6%sdkjfhk";
$dbname ="generics_shebanin";

$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($con)
{
	echo "Connect Successful";
}else{
	echo "Connention Problem occured";
}
?>