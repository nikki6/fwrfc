<table class = "table table-bordered">
  <tr>
    <th>Date</th>
    <th>Location</th>
    <th>Opponent</th>
    <th>Score</th>
    <th>Matrix</th>
  </tr>
    <?php
        include_once("security/connect.php");
    //this is the query
        $result = mysqli_query($mysqli, "SELECT * FROM schedule");
    //this creates the while loop that populates the table
        while($row = mysqli_fetch_assoc($result)){
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['date'], $row['location'], $row['opponent'], $row['score'], $row['matrix']);
        }
    //Closes Connection
    $mysqli -> close();

    ?>
</table>