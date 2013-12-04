<?php
	/**
	 * Matt Antonio
	 * Class: SSL
	 * Assignment: Lab 1
	 * Date: 11/25/13
	 */
?>


	<section id="adspace">
		<div id="powerball-nums">
			<?php
				//empty array to store all powerball numbers
				$pbNums = array();

				//random number for powerball
				$pbBall = rand(1,35);

				//for loop limits the regular numbers to five and makes them all random
				for($i = 0; $i < 5; $i++) {
					$x = rand(1,59);

					//push random numbers into the array
					array_push($pbNums, $x);
				}
				//push random powerball number into the array
				array_push($pbNums, $pbBall);
			?>

			<h2>YOU'RE A WINNER!!!</h2>

			<ul id="pbNumbers">
				<?php
					//foreach loop puts random generated numbers into an HTML list
					foreach($pbNums as $num) {
						echo "<li>".$num."</li>";
					}

				?>
			</ul> <!-- END #pbNumbers -->
		</div> <!-- END #powerball-nums -->
	</section> <!-- END #adspace -->
</div> <!-- END .wrap -->