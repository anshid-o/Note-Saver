<html>

<?php
session_start();
if(isset($_SESSION['uname'])){
?> 
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Search page          </title>
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



            .clear {
            clear: both;
            }


            .slide-toggle {
            display: none;
            }

            .slidemenu {
            float: left;
            font-family: arial, sans-serif;
            max-width: 200px;
            margin-top: -2px;
            margin-left: 30vh;
            overflow: hidden;
        
            }

            .slidemenu label {
        padding-left: 40px;
        width: 10%;
        text-align: right;
        display: block;
        float: left;
        color: #333;
        opacity: 0.2;

            }

            .slidemenu label:hover {
        cursor: pointer;
        color: #666;
            }

            .slidemenu label span {
        display: block;
        padding: 0;
            }

            .slidemenu label .icon {
        font-size: 25px;
        border: solid 2px #333;
        text-align: center;
        height: 25px;
        width: 25px;

        display: block;
        margin: 0 auto;
        line-height: 25px;
        border-radius: 50%;
            }

            /*Bar Style*/

            .slider {
        width: 80%;
        height: 5px;
        display: block;
        background: #ccc;
        margin-top: 8px;
        margin-left: 20px;
        border-radius: 5px;
            }

        .slider .bar {
        width: 50%;
        height: 5px;
        background: #333;
        border-radius: 5px;
            }

            /*Animations*/
            .slidemenu label,
        .slider .bar {
        transition: all 500ms ease-in-out;
        -webkit-transition: all 500ms ease-in-out;
        -moz-transition: all 500ms ease-in-out;
            }

        /*Toggle*/

            .slidemenu .slide-toggle:checked+label {
            opacity: 1;
            }



    .slidemenu #slide-item-1:checked~.slider .bar {
        margin-left: 0%;
    }

    .slidemenu #slide-item-2:checked~.slider .bar {
        margin-left: 50%;
    }


    table {
        width: 100%;
    }

    th,
    td {
        padding: 10px;
    }

        /* label{
        text-decoration: underline solid rgb(51, 3, 96) 12%;
        float: left;
        } */
        .form-group {
        margin-top: -30px;
        /* margin-right: -120px; */
        margin-left: -10px;
        width: 103%;
        border-radius: 12px;
        padding: 5px;
        height: 18vh;
        background-color: bisque;
        text-decoration: solid black;
        }

        .form-group:hover {

        box-shadow: 0 0 10px rgb(13, 56, 42);
        }

        input {
        width: 80%;
        color: brown;
        background-color: white;
        border-radius: 5px;
        padding: 10px 60px;
        margin: 8px 0;
        /* border-bottom: 2px solid red; */
        }
    

        .form-group input:focus {
        outline: none;

        box-shadow: 3px 3px 10px rgb(168, 92, 92);
        }
    

        .but input:hover {
        color: aliceblue;
        background-color: rgb(31, 7, 53);

        }

        input[type=submit] {
        width: 12%;
        padding: 10px 25px;
        background: rgb(51, 3, 96);
        border: 0 none;
        cursor: pointer;
        -webkit-border-radius: 5px;
        border-radius: 10px;
        margin-left: -150px;
        margin-top: 3px;
        }
        .ab{
        margin-left: -30vh;
        }

        

            </style>
            </head>

            <body>
            <div class='column'>
        <div class='container'  style='opacity:1'>
        <div class='head'>
            <h1>Search notes</h1>
        </div>
        <div class='navbar'>
            <a href='home.php'><i class='fa fa-home'></i> Home</a>
            <a class='active' href='#'><i class='fa fa-search'></i> Search</a>
            <a href='post.php'><i class='fa fa-wpforms'></i></i> Post</a>
            <a href='profile.php'><i class='fa fa-user'></i> Profile</a>
            <a href='about.php'><i class='fa fa-info-circle'></i> About</a>
            <a style='float:right;border-right: none;' href='logout.php'><i class='fa fa-arrow-right'></i>
                Logout</a>
        </div>

        <form action='result.php' method='post'>
            
            <div class='form-group'>
                <div class='ab'>
                    <table align='center'>
                        <tr>
                            <th style='padding-left: 200px'><label for='search'>Keyword :</label></th>
                            <td colspan='2' style='padding-left:0'>
                    <input type='text' class='form-control' id='searchkey' placeholder='Enter Keyword' name='searchkey'>
                        </td>
                        </tr>
                    </table>
                </div>
                <nav class='slidemenu'>

                    <!-- Item 1 -->
                    <input type='radio' name='slideItem' id='slide-item-1' value='notes' class='slide-toggle' checked />
                    <label for='slide-item-1'>
                        <p class='icon'>✎</p><span>Notes</span>
                    </label>

                    <!-- Item 2 -->
                    <input type='radio' name='slideItem' id='slide-item-2' value='users' class='slide-toggle' />
                    <label for='slide-item-2'>
                        <p class='icon'>★</p><span>Users</span>
                    </label>



                    <div class='clear'></div>

                    <div class='slider'>
                        <div class='bar'></div>
                    </div>

                </nav>
                <div class='but'>
                    <input type='submit' name='submitbt' class='btn btn-primary' value='Search'>
                </div>
            </div>
            
            
        </form>
        
        </div>
        </div>
        </body>
        
        


 
    <?php
    
  
}

?>
</html>