<?php
session_start();
$host = "localhost";
$port = "5432";
$dbname = "testdb";
$user = "postgres";

$password = "root"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
$sql = "update public.user SET email='".$_POST['newemail']."' WHERE email='".$_SESSION['email']."'";
                
$result=pg_query($dbconn,$sql);
$row_count= pg_num_rows($result);

  if($result){
      $_SESSION['em']=$_POST['newemail'];
          echo "<script>location.href='profile.php'</script>";
  }else{
      
        echo $ret;
  }
  pg_close($dbconn);
?>