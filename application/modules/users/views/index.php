<h1>Example modulo:: users</h1>
 
<?php foreach($users as $user) : ?>
	
	<p>Nombre: <?php echo $user->nombre ?> Password: <?php echo $user->password ?></p>
	
<?php endforeach; ?>