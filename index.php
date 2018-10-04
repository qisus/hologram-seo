<?php
include 'header.php';

?>

		<div id="content">
			<div id="intro">
      				<h1><span>On-Page SEO Analysis</span></h1><br>
      				<p>Search Engines like Google made it their mission to organize the world’s information 
						  <br>and give the users the useful answers in the least amount of time. 
						  <br>But how do you get to the top of an organic search ranking? 
						  <br><br>By improving your website’s content, structure and usability so Google can read it with ease and precision. 
						  <br>Hologram SEO is a free on-page seo tester to help you find your ranking flaws on Google and provide you with suggestions. 
						  <br>So your website can rank up and stand out. </p><br>


				<div class="containeritem">
					<form class="formanalyze" action="result.php"  method="post">
							<input type="text" class="formfield" name="url" placeholder="https://example.com" value=""/>
							<button type="submit" name="submit" value="submit">ANALYZE</button>
							<?php

?>
					</form>
				</div>

			</div>
		</div> <!-- content  -->

  <?php

include 'footer.php';
?>