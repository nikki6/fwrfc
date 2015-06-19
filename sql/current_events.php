<table class = "table table-bordered">
  <tr>
    <th>Date</th>
    <th>Event</th>
    <th>Location</th>
  </tr>
    <?php
        include_once("security/connect.php");
        //this is the query
        $result = mysqli_query($mysqli, "SELECT * FROM current_events");
        //this creates the while loop that populates the table
        while($row = mysqli_fetch_assoc($result)){
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['date'], $row['event'], $row['location']);
        }
    //Closes Connection
    $mysqli -> close();

    ?>
</table>
 