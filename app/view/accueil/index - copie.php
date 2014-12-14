<?php include_once('../app/view/include/header.inc.php'); ?>
                <div class="col-lg-12">
                    <h1 class="page-header">Annonces immobilières</h1>
                    <h3 class='red'>Annonces 1 :</h3>
                    <h3 class='red'>Annonces 2 :</h3>
                    <h3 class='red'>Annonces 3 :</h3>
                    <h3 class='red'>Annonces 4 :</h3>
                </div>
				
				<div>
	            <table id="tableau" class="table">

	                 	<tr>
	                        <th height="40" width="110">src photo</th>
	                        <th height="40" width="110">desrc photo</th>
	                        <th height="40" width="110">mitoyen</th>
	                  	</tr>
	                  	

	                  <?php foreach ($afficher_annonces as $key => $row) {
	                              echo"<tr>"; 
	                              echo"<td>".$row['PHO_SRC']."</td>";
	                              echo"<td>".$row['PHO_DESCR']."</td>";
	                              echo"<td>".$row['MIT_LIB']."</td>";
	                              echo"</tr>";
	                        }
	                  ?>
	            </table>
      		</div>
      		<?php echo"<td>".$afficher_annonces[0]['PHO_SRC']."</td>"; ?>
                
<?php include_once('../app/view/include/footer.inc.php'); ?>