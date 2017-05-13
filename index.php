<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo(title); ?></title>
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
</head>
<body>
	<div class="navbar-fixed">
	  <nav class="white z-depth-3">
	    <div class="nav-wrapper">
	      <a href="#!" class="brand-logo center black-text flow-text"><?php bloginfo(name) ?></a>
	    </div>
	  </nav>
	</div>
  <div class="container">
    <div class="row">
      <div class="col s12 l3 hide-on-med-and-down">
        <ul>
          <li class="flow-text">Lista 1</li>
          <li class="flow-text">Lista</li>
          <li class="flow-text">Lista</li>
          <li class="flow-text">Lista</li>
          <li class="flow-text">Lista</li>
        </ul>
      </div>
      <div class="col s12 l9">
        <div class="row"></div>
        <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt qui expedita aliquid voluptates. Delectus odit reiciendis possimus distinctio maiores molestiae obcaecati, perspiciatis. Temporibus, vel. Minima doloribus modi voluptas vero nulla?</p>
        <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt qui expedita aliquid voluptates. Delectus odit reiciendis possimus distinctio maiores molestiae obcaecati, perspiciatis. Temporibus, vel. Minima doloribus modi voluptas vero nulla?</p>
        <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt qui expedita aliquid voluptates. Delectus odit reiciendis possimus distinctio maiores molestiae obcaecati, perspiciatis. Temporibus, vel. Minima doloribus modi voluptas vero nulla?</p>
      </div>
    </div>
  </div>
  <footer class="page-footer grey darken-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text"><?php bloginfo(name) ?></h5>
          <p class="grey-text text-lighten-4"><?php bloginfo(description) ?></p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2017 Feel free to edit an share!
        <a class="grey-text text-lighten-4 right" href="https://github.com/Jhonbeltran">@Jhonbeltran</a>
      </div>
    </div>
  </footer>       
</body>
</html>