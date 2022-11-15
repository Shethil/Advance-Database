 

<hlml>

    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    </head>

    <div class="container">
    <?php
				$link = oci_connect("BPL", "bpl", "localhost/XE");
				if($link){


					// table

					$query = 'select * from owner order by ownerID';
					$stid = oci_parse($link, $query);
					$r = oci_execute($stid);


					// Fetch each row in an associative array
					print '<table class="table table-border">

					<tr>
                    <th>Owner ID</th>
                    <th>Name</th>
                    <th>Team ID</th>
                	</tr>';

					

					while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
					   print '<tr>';
					   foreach ($row as $item) {
					       print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
					   }
					   print '</tr>';
					}
					print '</table>';
		
		}

		?> 
	</div>
	</html>
					


