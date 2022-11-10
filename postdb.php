<?php
session_start();
$host = "localhost";
$port = "5432";
$dbname = "testdb";
$user = "postgres";

$password = "root"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
// if(!$dbconn) {
//         echo "Error : Unable to open database\n";
//      } else {
//         echo "Opened database successfully\n";
      
//  if(isset($_POST['submit'])&&!empty($_POST['submit'])){
        // if (!isset($_POST['note'])) {
                // Escape any html characters
                // echo "note is not set";
        //     }else{
                // echo $_POST['note'];
                // echo $_POST['title'];
                // echo $_SESSION['email'];
    $sql = "insert into public.snote(name,note,email)values('".$_POST['title']."','".htmlspecialchars($_POST['note'])."','".$_SESSION['email']."')";
                // echo $sql;
  $ret = pg_query($dbconn,$sql);

  if($ret){
      
          echo "<script>location.href='home.php'</script>";
  }else{
      
        echo $ret;
  }
// }
// }

// }
//postgres=# \c testdb
// You are now connected to database "testdb" as user "postgres".
// testdb=# \d
//               List of relations
//  Schema |     Name      |   Type   |  Owner
// --------+---------------+----------+----------
//  public | snote         | table    | postgres
//  public | snote_nid_seq | sequence | postgres
//  public | user          | table    | postgres
//  public | user_id_seq   | sequence | postgres
// (4 rows)


// testdb=# select * from public."snote";
//  nid | name | note | email
// -----+------+------+-------
// (0 rows)

pg_close($dbconn);
?>