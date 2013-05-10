
<?php 
		if($results==false){
			echo '<tr>';
				echo '<td>';
					echo 'No results Found';
				echo '</td>';
			echo '</tr>';
		}
		else{
			foreach ($results as $row ){
							$sp_id = $row->species_taxon_id;
							$habitat = $row->habitat;
					
			echo '<b>'.$sp_id.'</b> ->> '.$habitat;
								echo '<hr>';
			}
		}		
		?>
		<p><?php echo $links; //links for pagination?></p>