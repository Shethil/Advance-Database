
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Player List</title>
</head>
<body>
    
    <br>
    <br>
    <center>
    <form method="POST" action="">
    	<div align="Right">
    		<input type="text" name="search">
    		<input class="btn btn-primary" type="submit" name="submit" value="Search">
    	</div>
    	<br>
    	<br>
    <table class="table table-bordered">
        <tr>

            <th>ID</th>
            <th>Player Name</th>
            <th>Role</th>
            <th>Age</th>
            <th>Price</th>
            <th>Team ID</th>
            <th>SID</th>
        </tr>
        <?php

	        if (isset($_POST['submit'])) {

				$username = $_POST['search'];

				$link = oci_connect("BPL", "bpl", "localhost/XE");

				$result = oci_parse($link, "SELECT * FROM player WHERE PLAYERNAME LIKE '$username%' ");
		    	oci_execute($result);
		    	

		    	$i=0;
	            while($row=oci_fetch_array($result)) {
	            ?>
	                <tr>
	                    <td><?php echo $row["PLAYERID"]; ?></td>
                        <td><?php echo $row["PLAYERNAME"]; ?></td>
	                    <td><?php echo $row["ROLE"]; ?></td>
	                    <td><?php echo $row["AGE"]; ?></td>
                        <td><?php echo $row["PRICE"]; ?></td>
                        <td><?php echo $row["TEAMID"]; ?></td>
                        <td><?php echo $row["SID"]; ?></td>
	                </tr>
	            <?php
	            $i++;
	            }

			}
			

            
        ?>
        </table>
    </form>
    </center>
    

</body>
</html>