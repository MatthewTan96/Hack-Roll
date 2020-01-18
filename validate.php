<?php

$connMgr = new ConnectionManager();
$pdo = $connMgr->getConnection();
$sql = "SELECT * FROM login_credentials WHERE username = :username";
$stmt = $pdo->prepare($sql);
$stmt-> bindParam(':username',$username, PDO::PARAM_STR);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$status = $stmt->execute(); //boolean
if(!$status){
    $stmt -> errorinfo();
}


if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT username, password FROM login_credentials WHERE username='$username' AND password='$password'";


$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if( $num_row ==1 )
     {
 $_SESSION['userid']=$row['userid'];
 header("Location: admin.php");
 echo 'hi there';
 exit;
  }
  else
     {
 echo 'oops  can not do it';
  }
 }
?>