<?php include_once('../app/view/include/header.inc.php'); ?>
                
            <div id="desc_annonces">

            	<!-- NOM AGENCE -->
				<div class="form-group">
				<label class="" for="textinput">Agence :</label>  
					<div class="col-md-4">
					  	<?php echo $afficher_annonces[0]['AGE_NOM'];?> 
					</div>
				</div>

				<!-- PHOTO ANNONCE -->
				<div class="form-group">
				<label class="" for="textinput">Photo :</label>  
					<div class="col-md-4">
					  	<?php echo $afficher_annonces[0]['AGE_PHOTO'];?> 
					</div>
				</div>

				<!-- TITRE ANNONCE -->
				<div class="form-group">
				<label class="" for="textinput">Titre :</label>  
					<div class="col-md-4">
					  	<?php echo $afficher_annonces[0]['MAN_TITRE'];?>
					</div>
				</div>

				<!-- PRIX ANNONCE -->
				<div class="form-group">
				<label class="" for="textinput">Prix :</label>  
					<div class="col-md-4">
					  	<?php echo $afficher_annonces[0]['MAN_TARIF'];?>
					</div>
				</div>

				<!-- REGION AGENCE -->
				<div class="form-group">
				<label class="" for="textinput">Région :</label>  
					<div class="col-md-4">
					  	<?php echo $afficher_annonces[0]['MAN_REG_LIB'];?>
					</div>
				</div>

				<!-- ADRESSE AGENCE -->
				<div class="form-group">
				<label class="" for="textinput">Adresse :</label>  
					<div class="col-md-4">
					  	<?php echo $afficher_annonces[0]['MAN_ADR1'];?>
					</div>
				</div>

				<!-- DESCRIPTION ANNONCE -->
				<div class="form-group">
				<label class="" for="textinput">Description :</label>  
					<div class="col-md-4">
					  	<?php echo $afficher_annonces[0]['MAN_DESCR'];?>
					</div>
				</div>

            </div>
                
<?php include_once('../app/view/include/footer.inc.php'); ?>