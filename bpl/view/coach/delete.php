
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Player</title>
</head>
<body>
    <h2 align="center">Delete Coach</h2>
   
    
    <form class="container" method="POST" action="">

            <div class=" form-outline mb-2 w-25">
                <label class="form-label" align="left">Coach ID</label>
                <input type="text" name="id" placeholder="Enter coach id" class="form-control form-control-sm"> 
            </div>

            
            <!-- Submit button -->
             <input type="submit" name="submit" value="Add">

        <?php

	        if (isset($_POST['submit'])) {

				
                $id = $_POST['id'];
              
				        $link = oci_connect("BPL", "bpl", "localhost/XE");

                
                 $result = oci_parse($link, " DELETE FROM Coach WHERE CoachID = $id");
               

               if( $rc=oci_execute($result)){
                    echo "data deleted";
              }
			}
			
        ?>
    </form>
    
    

</body>
</html>