<?php
    $server = "localhost";                    //server name
    $user = "root";                           //user name
    $password = "";                           //password is empty for sql
    $db = "db_movies";                              //type database name

    $conn = mysqli_connect($server,$user,$password,$db);    //connecting to database

    if(!$conn)                                //incase connection fails
    {
        echo "connection failed";       //exits the program
    }
    $sql = "INSERT INTO movie (name , actor , actress , director , year ) VALUES ('robot' , 'darshan' , 'asha' , 'jagapathi' , 2004),('pogaru' , 'dhruva' , 'rashmika' , 'karthik' , 2008),('yuvarathna' , 'puneetha' , 'sayesha' , 'nivin' , 2012),('salaga' , 'vijay' , 'nima' , 'navin' , 2012),('dhrishya' , 'ravi' , 'shruthi' , 'nina' , 2000);       //query

             $insert = mysqli_query($conn,$sql);                     //executing query
             echo '<script type="text/javascript">';
                echo 'alert("movies added successfully");';
                echo 'window.location.href="display.php";';
                echo "</script>";
?>
