<html>

<?php
session_start();
if(isset($_SESSION['uname'])){
    ?>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Profile page</title>
<link rel='stylesheet' href='style.css'>
<style>

body{
    background-image: url('img/marvelt.jpg');
    background-size: 100% 100%;   
}

.navbar {
    width: 100%;
    background-color: #555;
    overflow: auto;
  }
  
  .navbar a {
    float: left;
    padding: 12px;
    color: white;
    text-decoration: none;
    font-size: 17px;
  }
  
  .navbar a:hover {
    background-color: #000;
  }
  
  .active {
    background-color: #04AA6D;
  }
  
  @media screen and (max-width: 500px) {
    .navbar a {
      float: none;
      display: block;
    }
  }


.container{
    border-radius: 8px;
    text-align: center;
    margin-left: 25%;
   margin-top: 15vh;
    width: 50%;
    height: 65vh;
    background-color: palegreen;
    opacity: 0.95;
    align-content: space-around;
    
}
.container:hover{
    box-shadow:  3px 3px 10px rgb(80, 11, 11);
    opacity: 1.0;
}
.form-group{
    width: 100%;
    font-weight: 600;
    /* padding-left: 5%; */
}

.head{
    color: brown;
}
.forms{
    color: blue;
}

form{
    padding: 5vh;
    
}
.ta{
    padding-left: 15px;
    padding-top: 5px;
    float: left;
}
.tab{ 
    border-radius: 12px;
    padding-top: 5px;
    text-decoration: solid black;
}
.titblk{
    width: 100%;
    height: 10vh;
}
.tablk{
    width: 100%;
    border-radius: 12px;
}
.tablk:hover{
    
    box-shadow:  0 0 10px rgb(13, 56, 42);
}
.tita{
    padding-top:3%;
    padding-left: 5%;
    float: left;
}
.tit{ 
    border-radius: 12px;
    width: 70%;
    text-decoration: solid black;
}
.tit:hover{
    
    box-shadow:  0 0 10px rgb(13, 56, 42);
}

textarea{
    width: 98%;
  height: 150px;
  /* padding: 12px 20px; */
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 8px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
input[type=text]{
    color: rgb(39, 2, 2);
    background-color: white;
    border-radius: 5px;
    padding: 12px 20px;
    margin: 8px 0;
    width: 70%;
    /* border-bottom: 2px solid red; */
}

.form-group input:focus{
    outline: none;
    
    box-shadow: 2px 2px 5px rgb(168, 92, 92);
}

.but input:hover{
    color: aliceblue;
    background-color: rgb(9, 63, 24);
    box-shadow: 2px 2px 5px rgb(223, 53, 30);
}
.but{
    padding: 0;
    
}
input[type=submit] {
    padding:5px 15px; 
    font-weight: 700;
    box-shadow: 2px 2px 5px rgb(34, 32, 188);
    background:rgb(200, 82, 116); 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 10px; 
}
table{
    width: 90%;
}
th, td {
    padding: 15px;
  }

.details{
    background-color: darkseagreen;
    width: 90%;
    height: 30vh;
    margin-top: 6vh;
    margin-left: 5%;
    border-radius: 10px;

}
.details:hover{
    
box-shadow:  3px 3px 10px rgb(80, 11, 11);
}
.dett{
    margin-left: 3%;
}

</style>
</head>
<body>
<div class='column'>
    <div class='container' style='opacity:1'>
        <div class='head'>
            <h1>About</h1>
        </div>
        <div class='navbar'>
            <a href='home.php'><i class='fa fa-home'></i> Home</a> 
            <a href='search.php'><i class='fa fa-search'></i> Search</a> 
            <a href='post.php'><i class='fa fa-wpforms'></i></i> Post</a>
            <a href='profile.php'><i class='fa fa-user'></i> Profile</a> 
            <a class='active' href='#'><i class='fa fa-info-circle'></i> About</a> 
            <a style='float:right;border-right: none;' href='logout.php'><i class='fa fa-arrow-right'></i> Logout</a>
        </div>
        <div class="details">
            <table class="dett">
            <tr>
                <th>Submitted by :</th>
                <th>Anshid O</th>
            </tr>
            <tr>
                <th>
                Submitted to :
                </th>
                <th>
                Assistant Professor RABABA KAREEM.K
                </th>
            </tr>
            <tr>
                <th>
                    Submitted on :
                </th>
                <th>
                    10-11-2022
                </th>
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