
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Player</title>
</head>
<body>
    <h2 align="center">Add player</h2>
   
    
    <form class="container" method="POST" action="">

            <div class=" form-outline mb-2 w-25">
                <label class="form-label" align="left">Player ID</label>
                <input type="text" name="id" placeholder="Enter Player id" class="form-control form-control-sm"> 
            </div>

            <div class=" form-outline mb-2 w-25">
                <label class="form-label" align="left">Player Name</label>
                <input type="text" name="name" placeholder="Enter Player name" class="form-control form-control-sm"> 
            </div>

            <div class=" form-outline mb-2 w-25">
                <label class="form-label" align="left">Player Role</label>
                <select name="role" class="form-select" aria-label="Default select example">
                  <option value="Allrounder">Allrounder</option>
                  <option value="Batsman">Batsman</option>
                  <option value="Bowler">Bowler</option>
                </select> 
            </div>

            <div class=" form-outline mb-2 w-25">
                <label class="form-label" align="left">Player Age</label>
                <input type="text" name="age" placeholder="Enter Player age" class="form-control form-control-sm"> 
            </div>

            <div class=" form-outline mb-2 w-25">
                <label class="form-label" align="left">Price</label>
                <input type="text" name="price" placeholder="Enter price" class="form-control form-control-sm"> 
            </div>

            <div class=" form-outline mb-2 w-25">
                <label class="form-label" align="left">Team</label>
                <select name="teamid" class="form-select" aria-label="Default select example">
                  <option value="101">Dhaka</option>
                  <option value="102">Khulna</option>
                  <option value="103">Sylhet</option>
                  <option value="104">Chattogram</option>
                  <option value="105">Comilla</option>
                  <option value="106">Barisal</option>
                </select> 
            </div>

            <div class=" form-outline mb-2 w-25">
                <label class="form-label" align="left">Statistic ID</label>
                <input type="text" name="statisticid" placeholder="Enter Statistic id" class="form-control form-control-sm"> 
            </div>
            <!-- Submit button -->
             <input type="submit" name="submit" value="Add">

        <?php

	        if (isset($_POST['submit'])) {

				
                $id = $_POST['id'];
                $name = $_POST['name'];
                $role = $_POST['role'];
                $age = $_POST['age'];
                $price = $_POST['price'];
                $teamid = $_POST['teamid'];
                $statisticid = $_POST['statisticid'];



				$link = oci_connect("BPL", "bpl", "localhost/XE");

                

                 $result = oci_parse($link, "INSERT INTO Player VALUES ($id,'${name}','{$role}',$age,$price,$teamid,$statisticid)");

                                          

               if( $rc=oci_execute($result)){
                    echo "data added";
              }
		    	



		    	
	           
	                

			}
			
        ?>
    </form>
    
    

</body>
</html>