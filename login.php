<html>
<?php
session_start();
$host = "localhost";
$port = "5432";
$dbname = "testdb";
$user = "postgres";
$password = "root"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);

if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
    $hashpassword = md5($_POST['pwd']);
    $sql ="select *from public.user where email = '".pg_escape_string($_POST['email'])."' and password ='".$hashpassword."'";
    $data = pg_query($dbconn,$sql); 
    $login_check = pg_num_rows($data);
    if($login_check > 0){ 
        $sq ="select *from public.user where email = '".pg_escape_string($_POST['email'])."' and password ='".$hashpassword."'";
    
        $ret = pg_query($dbconn, $sq) or die('Error message: ' . pg_last_error());
        if(!$ret) {
            echo pg_last_error($dbconn);
            exit;
        } 
         while($row = pg_fetch_row($ret)) {
            $nm =$row[1];
            $em =$row[2];
            $ps =$row[3];
            $mb =$row[4];

     
        }
        $_SESSION['uname']=$nm;
        $_SESSION['email']=$em;
        $_SESSION['mob']=$mb;
        $_SESSION['ps']=$ps;
        echo "<script>location.href='home.php'</script>";
    
    }else{
        ?>
        <head>
        <style>
        *{margin:0;padding:0;} 
            body{
                background-image: url('img/ironfly.jpg');
                background-size: 100% 100%;
            }

        .alert {
            margin-top:10vh;
            margin-left:30%;
            text-align:center;
            width:40%;
            border-radius: 10px;
            padding: 20px;
            background-color: #f44336;
            color: white;
            opacity: 1;
  transition: opacity 0.6s;
          }
          
          .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
          }
          
          .closebtn:hover {
            color: black;
          }

          

          .button {
            display: inline-block;
            border-radius: 6px;
            position: fixed;
            background-color: coral;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            margin-left:44%;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin-top: 8vh;
          }
          
          .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
          }
          
          .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
          }
          
          .button:hover span {
            padding-right: 25px;
          }
          
          .button:hover span:after {
            opacity: 1;
            right: 0;
          }
        </style>
        </head>
        <body>
        <div class='alert'>
        <span class='closebtn' onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Error !</strong> Email and Password does not match. Please correct and <a href='lg.html'>Login</a> to continue.
      </div>
      <form action="lg.html">
        <div class='login'>
            <button type="submit" class='button' style='vertical-align:middle'><span>Login </span></button>
        </div>
        </form>
      <script>
var close = document.getElementsByClassName('closebtn');
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = '0';
    setTimeout(function(){ div.style.display = 'none'; }, 600);
  }
}
</script>
      </body>
<?php
    }

}
pg_close($dbconn);


?>
</html>