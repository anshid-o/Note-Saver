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
    if(isset($_POST['submitbt'])&&!empty($_POST['submitbt'])){
        $type = $_POST['slideItem'];
        if($type ==  "notes"){
        $sql ="select * from public.snote where note like '%".$_POST["searchkey"]."%' ORDER BY name";
        }
        else{
            $sql ="select DISTINCT email from public.snote where email like '%".$_POST["searchkey"]."%' ORDER BY email";
        }
        $ret = pg_query($dbconn, $sql);
        $nof_notes = pg_num_rows($ret);
        if($nof_notes){
            if(!$ret) {
                echo pg_last_error($dbconn);
                exit;
            }
        $row = pg_fetch_all($ret);
        ?>
        <head>
            <style>
                .container{
    border-radius: 8px;
    text-align: center;
    margin-left: 25%;
   margin-top: 2vh;
    width: 50%;
    height: 65vh;
    background-color: gold;
    opacity: 0.95;
    align-content: space-around;
    
}
.search-bar{
    background-color: none;
    text-align: center;
    margin-left: 25%;
    height: 5vh;
    margin-top: 10vh;
    width: 50%;
    opacity: 0.95;
}
p {
  border-radius: 8px;
  border-bottom: 8px solid red;
  background-color: lightgrey;
}
.st:hover{
    box-shadow:  3px 3px 10px rgb(80, 11, 11);
    opacity: 1.0;
}

.container:hover{
    box-shadow:  3px 3px 10px rgb(80, 11, 11);
    opacity: 1.0;
}
        .note-list{
        background-color: lightgreen;
        padding: 2%;
        margin: 2%;
        padding-top:0;
        border-radius: 10px;
        }
        .note-list:hover{
        background-color: lightgoldenrodyellow;
        border-radius: 15px;
        animation-name: listshow;
        animation-timing-function: ease;
        animation-fill-mode: forwards; 
        animation-duration: 2s;
        }
        @keyframes listshow {
    from{padding: 2%;}
    
    to{padding: 3.5%;}
  }
    
        .note-title{
        color: rgb(109, 79, 3);
        text-shadow: 2px 2px 5px wheat;
        
        }
        nav ul{
            padding-left:0;
            height:65vh; width:100%;list-style-type: none;}
        nav ul{overflow:hidden;overflow-y: scroll; }
        .note-email{
            text-align:right;
            padding-top:10px;
            padding-bottom:-5px;
        }
        </style>
        </head>
        <body>
        <div class="search-bar">
            <h2><p class="st">Showing result of search "<?php echo $_POST["searchkey"]; ?>"</p></h2>
        </div>
        <div class="container">
        
        
        <nav>
            <ul>
            <?php
            if($type ==  "notes"){
        for( $i=0;$i<$nof_notes;$i=$i+1){
            
         echo "<div class='example'><li><div class='note-list'>
                <div class='note-title'><h1>".$row[$i]['name']."</h1></div>
                <div>".$row[$i]['note']."</div>
                <div class='note-email'>- <b> ".$row[$i]['email']."</b></div>
            </div></li></div>";
            }
        }else{
            for( $i=0;$i<$nof_notes;$i=$i+1){
                echo "<li><div class='note-list'>
                       <div class='note-title'><h1>".$row[$i]['email']."</h1></div>
                       
                   </div></li>";
                   }
        }
        }
        else{
            echo "<h1> search a valid key</h1>";
        }
        ?>
        </ul>
        </nav>
        </div>
        
    </body>
        <?php
    }
    pg_close($dbconn);
}

?>
</html>