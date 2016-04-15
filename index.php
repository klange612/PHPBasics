<?php 

$name = "Mike the Frog";

function hello($arr) {
	if (is_array($arr)) {
		foreach ($arr as $name) {
			echo "Hello $name <br>";
		}
	} else {
		echo "Hello unknown";
	}
	
}
// function hello($name, $age) {
// 	$max = 200;
// 	if ($age < $max) {
// 	echo "Hello, $name you are $age years old (younger than $max).";
// 	} else {
// 	echo "I don't think you are $age years old, you must be under $max!";
// 	}
// }
?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title><?php echo $name ?> | Treehouse Profile</title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <section class="sidebar text-center">
      <div class="avatar">
        <img src="img/avatar.png" alt="Mike The Frog">
      </div>
      <h1><?php echo $name ?></h1>
      <p>Portland, OR</p>
      <hr />
      <p>Welcome to PHP Basics!</p>
      <hr />
      <ul class="social">
        <li><a href=""><span class="icon google"></span></a></li>
      </ul>
    </section>
    <section class="main">
      <p>Let's Get Started!</p>
      <p>
      <?php 
		$names = array('Kurt', 'Joe', 'Travis');
		echo hello($names);

		echo $name . "<br>";
		echo strlen($name) . "<br>";
		echo strpos($name, 'Frog');

      ?>
    </section>
  </body>
</html>