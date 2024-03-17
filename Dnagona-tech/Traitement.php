<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1> Afficher les données issuses du formulair
	re
</h1>
<?php var_dump($_POST); ?>
<ul>
	<li> <?php echo $_POST['nom'];  ?></li>
    <li> <?php echo $_POST['prenom'];  ?></li>
    <li> <?php echo $_POST['email'];  ?></li>
    <li> <?php echo $_POST['com'];  ?></li>
    <li> <?php echo $_POST['tel'];  ?></li>
</ul>
</body>
</html>