<?php include_once('../app/view/include/header.inc.php'); ?>
<?php //var_dump($afficher_photo); ?>
<?php //var_dump($afficher_annonces); ?>

		<div id="header_annonce">
            <h1 class="titre_page_annonce"><?php echo $afficher_annonces[$_SESSION['annonce']]['AGE_NOM'];?></h1>
            <div class="details_agence">
            	<?php echo $afficher_annonces[$_SESSION['annonce']]['AGE_VILLE'];?> <br/>
            	<?php echo $afficher_annonces[$_SESSION['annonce']]['AGE_RUE'];?> <br/>
            	<?php echo $afficher_annonces[$_SESSION['annonce']]['AGE_CP'];?> <br/>
            	<?php echo 'Tél : '; echo $afficher_annonces[$_SESSION['annonce']]['AGE_TEL'];?> <br/>
            	<?php echo 'Fax : '; echo $afficher_annonces[$_SESSION['annonce']]['AGE_FAX'];?> <br/>
            	<?php echo 'E-mail : '; echo $afficher_annonces[$_SESSION['annonce']]['AGE_MAIL'];?> <br/>
            </div>
        </div>
      
            <div id="desc_annonces">


            	<div id="desc_annonce_gauche">

					<!-- TITRE ANNONCE -->
					<div class="form-group"> 
						<div class="annonce_desc_titre">
						  	<?php echo $afficher_annonces[$_SESSION['annonce']]['MAN_TITRE'];?>
						</div>
					</div>

					<!-- PRIX ANNONCE -->
					<div class="form-group"> 
						<div class="annonce_desc_prix">

							<?php 	if ($afficher_annonces[$_SESSION['annonce']]['MAN_VEN_LOC'] == '1') {
						  				echo $afficher_annonces[$_SESSION['annonce']]['MAN_TARIF']; echo ' € / mois';
						  			}
						  			else {
						  				echo $afficher_annonces[$_SESSION['annonce']]['MAN_TARIF']; echo ' €';
						  			}
						  	?>

						</div>
					</div>

					<!-- LOCATION/VENTE ANNONCE -->
					<div class="form-group"> 
						<div class="annonce_desc_loc">
						  	
						  	<?php 	if ($afficher_annonces[$_SESSION['annonce']]['MAN_VEN_LOC'] == '1') {
						  				echo 'A louer';
						  			}
						  			else {
						  				echo 'A vendre';
						  			}
						  	?>
						  	
						</div>
					</div> 

					<!-- NBR DE PIECES ANNONCE / NBR DE CHAMBRES -->
					<div class="form-group"> 
						<div class="annonce_desc_pc">
						  	
						  	<?php 	if ($afficher_annonces[$_SESSION['annonce']]['MAN_NB_PIECES'] == '0') {
						  				echo '';
						  			}
						  			else {
						  				echo $afficher_annonces[$_SESSION['annonce']]['MAN_NB_PIECES']; echo ' Pièces';
						  			}
						  	?>

						  	<?php 	if ($afficher_annonces[$_SESSION['annonce']]['MAN_NB_CHAMBRES'] == '0') {
						  				echo '';
						  			}
						  			else {
						  				echo ' / '; echo $afficher_annonces[$_SESSION['annonce']]['MAN_NB_CHAMBRES']; echo ' Chambres';
						  			}
						  	?>
						</div>
					</div>

					<!-- REGION ANNONCE -->
					<div class="form-group"> 
						<div class="annonce_desc_region">
						  	<?php echo $afficher_annonces[$_SESSION['annonce']]['MAN_REG_LIB'];?>
						</div>
					</div>

					<!-- ADRESSE ANNONCE -->
					<div class="form-group"> 
						<div class="annonce_desc_adresse">
						  	<?php echo $afficher_annonces[$_SESSION['annonce']]['MAN_ADR1'];?>
						</div>
					</div>

					<!-- CP ANNONCE -->
					<div class="form-group"> 
						<div class="annonce_desc_cp">
						  	<?php echo $afficher_annonces[$_SESSION['annonce']]['MAN_CP'];?>
						</div>
					</div>

					<!-- ADRESSE 2 ANNONCE -->
					<div class="form-group"> 
						<div class="annonce_desc_adresse">
							<?php 	if ($afficher_annonces[$_SESSION['annonce']]['MAN_TRANSPORTS'] == '') {
						  				echo '';
						  			}
						  			else {
						  				echo 'Transports : '; echo $afficher_annonces[$_SESSION['annonce']]['MAN_TRANSPORTS'];
						  			}
						  	?>
						</div>
					</div>

					<!-- DESCRIPTION ANNONCE -->
					<div class="annonce_desc_desc"> 
						<div class="">
						  	<?php echo $afficher_annonces[$_SESSION['annonce']]['MAN_DESCR'];?>
						</div>
					</div>
				</div>


				<div id="desc_annonce_droite">

						<div id="carousel_image" class="carousel carousel-fade" data-ride="carousel">

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner">
							  <?php
							  if(empty($afficher_photo))
							  {
							  	 echo "<div class='item'>";
							      	
									echo "<img class='no_photo' src='images/nophoto.jpg' />";
									echo "<div class='carousel-caption'>";
									echo "<h4></h4>";
									echo "</div>";
									echo "</div>";
							  }
							  else
							  {
							       foreach ($afficher_photo as $key => $row) {
							      	echo "<div class='item'>";
									echo "<img src='http://ns366377.ovh.net/amsalem/3A_dev/immo/photos/T".$row['PHO_SRC']."' />";
									echo "<div class='carousel-caption'>";
									echo "<h4>".$row['PHO_DESCR']."</h4>";
									echo "</div>";
									echo "</div>";
							  	}
							  	}
								?>

							  </div>
						</div>
				</div>


				</div>

            </div>


<script>
    function init() {
    	loop();
	}
	
	function getQuerystring(key, default_) {
       if (default_==null) default_="";
       key = key.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
       var regex = new RegExp("[\\?&]"+key+"=([^&#]*)");
       var qs = regex.exec(window.location.href);
       if(qs == null) return default_; else return qs[1];
   }
   var agence = getQuerystring('agence');
	
	 function traiterFlux(flux) {
		contenu = "";
		$.each(flux, function(key,value) {
		contenu += "<b>"+value+"</b>";	
		});
		$(count_notif).html(contenu);	
		}


	function loop() {
		
		$(document).ready(function() {
	  		$( "#desc_annonces" ).fadeIn('slow').delay(10000).fadeOut('slow');
	  		$('.carousel').carousel({interval: 2000});
	  		$.ajax({
                            url:'../app/controler/accueil/ajax_annonce.php?agence='+agence+'',
                            method:'GET',
                            data:{},
                            success: function(data) {
                              console.log("ok");
                                                    },
                            error: function(jqXHR, textStatus, errorThrown) {
                                console.log("erreur execution requete ajax!");
                                
                            }
                        });

		});
		
		setTimeout(function () { location.reload(1); }, 10010);

	}
	setInterval('loop();',7000);
	init();
</script>  

<?php include_once('../app/view/include/footer.inc.php'); ?>