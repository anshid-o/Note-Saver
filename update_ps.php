<?php
session_start();
$host = "localhost";
$port = "5432";
$dbname = "testdb";
$user = "postgres";

$password = "root"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
$sql = "update public.user SET password='".md5($_POST['newpas'])."' WHERE email='".$_SESSION['email']."'";
                
$result=pg_query($dbconn,$sql);
$row_count= pg_num_rows($result);

  if($result){
      $_SESSION['ps']=$_POST['newpas'];
          echo "<script>location.href='profile.php'</script>";
  }else{
      
        echo $ret;
  }
  pg_close($dbconn);
?>