<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 
//1 
echo(abs(-10.3)). "<br>"; 
//2 
echo strlen("Salam CV!"). "<br>";
//3 
$cars = array("Lambo", "BMW", "Ferarri");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


/*  
	Étape 1: utilisez une fonction mathématique prédéfinie ici et faites-en écho

	Étape 2: utilisez une fonction de chaîne prédéfinie ici et faites-en écho

	Étape 3: Utilisez une fonction Array prédéfinie ici et faites-en écho 

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>