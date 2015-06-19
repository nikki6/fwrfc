<div class = "row">
  <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <table class = "table table-bordered">
      <tr>
        <th>Name</th>
        <th>Nickname</th>
        <th>Position</th>
        <th>Exec Board</th>
        <th>Current Player</th>
      </tr>
        <?php
            include_once("security/connect.php");
        //this is the query
            $result = mysqli_query($mysqli, "SELECT * FROM roster");
        //this creates the while loop that populates the table
            while($row = mysqli_fetch_assoc($result)){
            printf("<tr><td>%s %s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['firstName'], $row['lastName'], $row['nickName'], $row['position'], $row['execBoard'], $row['isCurrentPlayer']);
            }
        //Closes Connection
        $mysqli -> close();

        ?>
    </table>
  </div>
</div>