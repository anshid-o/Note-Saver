<html>
<?php
session_start();
$host = "localhost";
$port = "5432";
$dbname = "testdb";
$user = "postgres";
$password = "root"; 
$connection_string = "host=$host port=$port dbname=$dbname user=$user password=$password ";
$dbconn = pg_connect($connection_string);
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $sq="select 1 from public.user where email ='".$_POST['email']."'";
    
    $result = pg_query($dbconn,$sq);
    if (pg_num_rows($result)) {
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
        <strong>Error !</strong> You already registered using this email. Please  <a href='lg.html'>Login</a> to continue.
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
       
    }else{
      $sql = "insert into public.user(name,email,password,mobno)values('".$_POST['name']."','".$_POST['email']."','".md5($_POST['pwd'])."','".$_POST['mobno']."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
        $_SESSION['uname']=$_POST['name'];
        $_SESSION['email']=$_POST['email'];
        echo "<script>location.href='home.php'</script>";
    }else{
        
            echo "Soething Went Wrong";
    }
}
}
pg_close($dbconn);
?>