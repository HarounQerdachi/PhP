<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  
//1 
$t = "I love greenchip :p";
if ($t) {
  echo "I love greenchip :p";
} else {
  echo "I don't";
}
//2 
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}
//3 
switch ($i) {
    case "apple":
        echo "i est une pomme";
        break;
    case "bar":
        echo "i est une barre";
        break;
    case "cake":
        echo "i est un gateau";
        break;
	case 0:
		echo "i égal 0";
		break;
	case 1:
		echo "i égal 1";
		break;	
}

/*  

Étape 1: Créez une condition facultatif avec if, elseif et else pour enfin afficher la chaîne en disant, "I love greenchip :p"

Étape 2: Créez un forloop qui affiche 10 nombres

Étape 3: Créez une instruction switch qui teste à nouveau une condition avec 5 cas 

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>