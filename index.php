<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo(title); ?></title>
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
</head>
<body>
	<center>
		<h3>
			<?php bloginfo(description); ?>
		</h3>
	</center>
	<center>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo ea sed architecto vitae ab aliquid dolores autem, accusantium labore repudiandae natus. Ratione sapiente molestias, itaque accusamus tempora, voluptatem! Quasi, quaerat.</p>
	</center>
	
	<center>
		<ul>
			<li>Url: <?php bloginfo(url); ?></li>
			<li>Idioma <?php bloginfo(language); ?></li>
			<li>Archivo de css: <?php bloginfo(stylesheet_url); ?></li>
			<li>Directorio de archivos css: <?php bloginfo(stylesheet_directory); ?></li>
		</ul>
	</center>
</body>
</html>