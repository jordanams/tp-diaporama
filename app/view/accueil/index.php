<?php include_once('../app/view/include/header.inc.php'); ?>
                
        <div class="">
            <h1 class="titre_page">Annonces immobilières</h1>
        </div>

        <div id="navigation-wrapper">
			<ul id="top-navigation">
<?php foreach ($agence as $key => $row) {
			echo "<li><a href='index.php?module=accueil&action=annonces&agence=".$row['AGE_ID']."' class='myButton'>".$row['AGE_NOM']."</a></li>";
			}
			?>
			</ul>
					</div>
				
<?php include_once('../app/view/include/footer.inc.php'); ?>