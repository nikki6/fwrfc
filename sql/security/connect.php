<?php

    include_once("security/PSL_Config.php");
    $mysqli = mysqli_connect(MOMMABIRD,DRONE,CODE,MOTHERSHIP);
            //handles if the connection fails
    if($mysqli -> connect_erron){
        echo "Failed to connect";
    }
?>