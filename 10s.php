<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sum by 10</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="css/10s.css" rel="stylesheet"></script>
	</head>
	<body>
	<div class="container-fluid"> <!-- Bootstrap container div for bootstrap elements -->
	
<?php 
if (isset($_POST["submit"])) {
	$answer = $_POST["submit"];
	echo "Correct Answers are: ";
	$res = unserialize($_POST["results"]);
	foreach ($res as $sub) {
		foreach ($sub as $key => $value) {
			echo "<p>$key + $value</p>";
		}
	} // NEED pretty up the look of the answer page
	echo "<p>You said there were " . $answer . " correct answers";
	if ($answer == count($res)) {
		echo '<p class="alert alert-success"><strong>You are correct</strong> there are ' . count($res) . ' correct answers';
	} else {
		echo '<p class="alert alert-danger">Sorry! there were ' . count($res) . ' correct answers';;
	}
	die();  // NEED add ability to continue
}

// returns array of $qty random #'s
function getRand($qty) {
	$rands = [];
	for ($i=0; $i<$qty; $i++) {
		$rands[] = rand(1,9);
	}
	return $rands;
}

function equalTen(array $numbers) {
	$results = [];
	for ($x=0; $x<(count($numbers)-1); $x++) {
		for ($y=1; $y<(count($numbers)-$x);$y++) {
			$second = $y + $x;
// 			echo "<p>$numbers[$x] + $numbers[$second] mod (($numbers[$x] + $numbers[$second]) % 10)" . ($numbers[$x] + $numbers[$second]) % 10;
			if (($numbers[$x] + $numbers[$second]) % 10 == 0) {
				echo "<p>$numbers[$x] + $numbers[$second] = ";
				$results[] = [$numbers[$x] => $numbers[$second]];
			}
		}
	}
	return $results;
}

function combinations($x) {
	return ($x * ($x - 1) / 2);
}

$nums=4;
// $problems = getRand($nums);
echo "<p>";
$combos = combinations($nums);
echo "<p>";
// $res = equalTen($problems);
echo "<p>";

?>
<!-- NEED jquery selector for # of digits -->

		<h1>10's</h1>
<!-- 		<p class="rcorners2">7</p> -->
	<div class="form-group">
		<label for="select1">How many?</label>
		<select class="form-control" id="select1">
			<option>3</option>
			<option>4</option>
			<option>6</option>
		</select>
	</div>
	<script>$(".form-control").val();</script>
		<?php 
			$problems = getRand($nums);
			foreach ($problems as $problem) {
				echo "<p class=\"rcorners2\">$problem</p>"; 
			}
			?>
			<span class="nextLine">
				<?php 
				$res = equalTen($problems);
				?>
			</span>
		<p></br> 
		<!-- NEED better display of buttons, own line -->
		<form method="post" action="10s.php">
			<input type="hidden" name="results" value="<?php echo serialize($res); ?>">
			
			<div class="nextLine">
				<?php 
					echo "<p>";
					for ($i = 0; $i <= $combos; $i++) {
					echo '<input type="submit" name="submit" class="btn btn-info" value="' . $i. '">';
				} ?>
			</div>
		</form>
		</p>
	</div>
	
	<input type='submit' name='reload' value='Start over' 
		onClick="header('Location: http://localhost')"/>
	
	</body>
</html>
