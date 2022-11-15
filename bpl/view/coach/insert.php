
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Player</title>
</head>
<body>
    <h2 align="center">Add Coach</h2>
   
    
    <form class="container" method="POST" action="">

           

            <div class=" form-outline mb-2 w-25">
                <label class="form-label" align="left">Coach Name</label>
                <input type="text" name="name" placeholder="Enter Coach name" class="form-control form-control-sm"> 
            </div>

            <div class=" form-outline mb-2 w-25">
                <label class="form-label" align="left">Player Role</label>
                <select name="role" class="form-select" aria-label="Default select example">
                  <option value="Head Coach">Head Coach</option>
                  <option value="Balling Coach">Balling Coach </option>
                  <option value="Batting Coach">Batting Coach </option>
                  <option value="Fielding Coach">Fielding Coach</option>
                </select> 
            </div>


            <div class=" form-outline mb-2 w-25">
                <label class="form-label" align="left">Salary</label>
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

            <!-- Submit button -->
             <input type="submit" name="submit" value="Add">

        <?php

	        if (isset($_POST['submit'])) {

				
               
                $name = $_POST['name'];
                $role = $_POST['role'];
                $salary = $_POST['price'];
                $teamid = $_POST['teamid'];


				$link = oci_connect("BPL", "bpl", "localhost/XE");

                

                 $result = oci_parse($link, "INSERT INTO Coach VALUES ('','${name}','{$role}',$salary,$teamid)");

                                          

               if( $rc=oci_execute($result)){
                    echo "data added";
              }
		    	



		    	
	           
	                

			}
			
        ?>
    </form>
    
    

</body>
</html>