<?php
   include("checkauth.php");
   ?>
    <form action="changegroups.php" method="post" accept-charset="utf-8">
        <p>Add or remove users from groups</p>
        <input type="radio" name="operation" id="operation" value="add" />Add
        <br />
        <input type="radio" name="operation" id="operation" value="remove" />Remove
        <br />
        <br />
        <input type="text" name="users" id="users" value="Enter users here" />
        <br />
        <p>Select group:</p>
        <?php
            $mysqli = new mysqli("localhost", "mvmsmath", "mvmsmath", "mvmsmath_system");
            $query = "SELECT id from groups;";
            $result = $mysqli->query($query) or die(mysql_error());
            echo "<select name='group' id='group'>";
            while ($row = $result->fetch_assoc()){
                $id = $row['id'];
                echo "<option value='$id'>$id</option>";
            }
            echo "</select>";
        ?>
        <br />
        <button type="submit" class="btn btn-success" name="submit" id="submit" value="Submit"> Submit </button>
    </form>
