<html>
<?php
session_start();
if(isset($_SESSION['uname'])){
    $host = "localhost";
$port = "5432";
$dbname = "testdb";
$user = "postgres";

$password = "root"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);

$sql ="select * from public.snote where email = '".$_SESSION['email']."'";
$ret = pg_query($dbconn, $sql);
$nn = pg_num_rows($ret);
    ?>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Profile page</title>
    <link rel='stylesheet' href='profile_style.css'>
    <style>
table{
    width: 90%;
}
th, td {
    padding: 5px;
  }

/* label{
    text-decoration: underline solid rgb(51, 3, 96) 12%;
    float: left;
} */
.form-group{
    
    margin-left: 35px; 
    width: 90%;
    border-radius: 12px;
    padding: 5vh;
    background-color: bisque;
    text-decoration: solid black;
}
.form-group:hover{
    
    box-shadow:  0 0 10px rgb(13, 56, 42);
}

input{
    color: brown;
    background-color: white;
    border-radius: 5px;
    padding: 12px 20px;
    margin: 8px 0;
    /* border-bottom: 2px solid red; */
}

.form-group input:focus{
    outline: none;
    
    box-shadow: 3px 3px 10px rgb(168, 92, 92);
}

.but input:hover{
    color: aliceblue;
    background-color: rgb(31, 7, 53);
    
}
input[type=submit] {
    padding:5px 15px; 
    background:rgb(51, 3, 96); 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 10px; 
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
            padding: 0;
            margin-left:100px;
            width: 400px;
            transition: all 0.5s;
            cursor: pointer;
            margin-top: 0;
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
    <div class='column'>
        <div class='container'>
            <div class='head'>
                <h1>Profile</h1>
            </div>
            <div class='navbar'>
                <a href='home.php'><i class='fa fa-home'></i> Home</a> 
                <a href='search.php'><i class='fa fa-search'></i> Search</a> 
                <a href='post.php'><i class='fa fa-wpforms'></i></i> Post</a>
                <a class='active' href='#'><i class='fa fa-user'></i> Profile</a> 
                <a href='about.php'><i class='fa fa-info-circle'></i> About</a> 
                <a style='float:right;border-right: none;' href='logout.php'><i class='fa fa-arrow-right'></i> Logout</a>
              </div>

            <div>
            <span style='float:left;font-size:400%;text-decoration: underline;
            text-decoration-color: red;'>
            
            <?php echo ucfirst($_SESSION['uname']);
            
            
            
            ?></span>
            </div>
            <div class="details">
            <table class="dett">
                <tr>
                    <th style='font-size:110%;'>Number of saved notes :</th>
                    <th><?php echo $nn ?></th>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                <th style='font-size:160%;text-decoration: underline;
            text-decoration-color: blue;'>Update details</th>
            </tr>
                <tr><form action="update_name.php" method="post">
                    <th>Change Name :</th>
                    <th colspan="2"><input type="text" name="newname" placeholder="Change name <?php echo $_SESSION['uname']; ?>"></th>
                    <td>
                    <div class="but"><input type="submit" name="submitn" class="btn btn-primary" value="Update"></div>
                    </td>
                </form></tr>
                <tr><form action="update_mob.php" method="post">
                    <th>Change Mobile Number :</th>
                    <th colspan="2"><input type="text" name="newmob" placeholder="Change mobile number"></th>
                    <td>
                    <div class="but"><input type="submit" name="submitm" class="btn btn-primary" value="Update"></div>
                    </td>
                </form></tr>
                <tr><form action="update_em.php" method="post">
                    <th>Change Email ID :</th>
                    <th colspan="2"><input type="text" name="newemail" placeholder="Change email ID"></th>
                    <td>
                    <div class="but"><input type="submit" name="submite" class="btn btn-primary" value="Update"></div>
                    </td>
                </form></tr>
                <tr><form action="update_ps.php" method="post">
                    <th>Change Password :</th>
                    <th colspan="2"><input type="text" name="newnpas" placeholder="Set new password"></th>
                    <td>
                    <div class="but"><input type="submit" name="submitp" class="btn btn-primary" value="Update"></div>
                    </td>
                </form></tr>
                <tr><form action="delete_account.php" method="post">
                    
                    <td colspan="4">
                    <div class='login'>
            <button type="submit" class='button' style='vertical-align:middle'><span>Delete Account </span></button>
        </div>
                    </td></form>
                </tr>
                
            </table>
            </div>
        </div>
    </div>
</body>
<?php
}
?>
</html>