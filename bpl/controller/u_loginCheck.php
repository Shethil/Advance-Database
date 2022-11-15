<?php 

session_start();

		if(isset($_POST['submit'])){


				$link = oci_connect("BPL", "bpl", "localhost/XE");
				if($link){



					// table

					// $query = 'select * from statistic';
					// $stid = oci_parse($link, $query);
					// $r = oci_execute($stid);

					// // Fetch each row in an associative array
					// print '<table border="1">';
					// while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
					//    print '<tr>';
					//    foreach ($row as $item) {
					//        print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
					//    }
					//    print '</tr>';
					// }
					// print '</table>';



					

					

				$password = $_POST['password'];
				$name = $_POST['name'];

				if($password != "" || $name != ""){

					

				
					if($password == 'admin' && $name== 'Admin'){

						
						header('location: ../view/dashboard.php');
								
						
					}else{
						echo"Invalid Username or Password Please Try again";
					}


				}
				else{
					echo "Null value found";
				}

					


		}
					
	}

	else{
	 	echo "The connection could not be made";
	}

?> 