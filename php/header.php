 <header id="top" class="header">
        <div class="text-vertical-center">
            <h1></h1>
            <img src="img/YouLookGood.png" alt="YouLookGood">
            <h3>Fancy Fashion Looks</h3>
			<h5>
				<?php
					$dayoftheweek = date("w");
					switch($dayoftheweek){
						case 1:
							echo "Monday";
							break;
						case 2:
							echo "Tuesday";
							break;
						case 3:
							echo "Wednesday";
							break;
						case 4:
							echo "Thursday";
							break;
						case 5:
							echo "Friday";
							break;
						case 6:
							echo "Saturday";
							break;
						case 0:
							echo "Sunday";
							break;
					}
				?>
			</h5>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>