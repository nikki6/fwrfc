<?php
    include_once("security/connect.php");
    //this is the query
    $result = mysqli_query($mysqli, "SELECT info FROM practice_info WHERE season IS 'summer'");
    //this creates the while loop that populates the table
    while($row = mysqli_fetch_assoc($result)){
        printf("<p> %s </p>",$row['season']);
    }
    //Closes Connection
    $mysqli -> close();

?>