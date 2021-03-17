<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  
     class Chien{
		public $couleur_des_yeux = 'bleu';
		public $couleur_de_nez = 'black';
		public $couleur_du_fourrure = 'white';

		public function AfficherTout() {
			echo 'my dog have ' . $couleur_des_yeux . ' eyes and ' . $couleur_de_nez . ' nose, ' . $couleur_du_fourrure . 'fur';
			
		}
	 }
	/*  
	Étape 1: Créez une classe appelée Chien

	Étape 2: Définissez certaines propriétés pour le Chien, l'exemple, la couleur des yeux, le nez ou la couleur de la fourrure

	Étape 3: Créez une méthode nommée AfficherTout qui fait écho à toutes les propriétés

	Étape 4: Instanciez la classe / créez l'objet et appelez-le pitbull

	Étape 5: Appelez la méthode AfficherTout
	
	*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>