<!--
	I have commented out the actual PHP code.
		
	But wait, which comment tags are used?
	It is the HTML (browser) comment tag.
		
	Hopefully, that should make sense, as we are using the browser as 
	our output device!
		
	Cut and paste the PHP code into a file called <1hello1.php>
	   1) Don't copy the HTML comment
	   2) Remove the _ in the PHP start/end tags.
-->
<!--
<_?php

	for ($i = 1; $i < 3; $i = $i + 1) {
		for ($j = 1; $j < 4; $j = $j + 2) {
			for ($k = 1; $k < 8; $k = $k + 3) {
				print "i: $i, j: $j, k: $k <br>";
			}
		}
	}
	
?_>

-->
<!-- Below this line is our PHP code -->
<?php

	for ($i = 1; $i < 3; $i = $i + 1) {
		for ($j = 1; $j < 4; $j = $j + 2) {
			for ($k = 1; $k < 8; $k = $k + 3) {
				print "i: $i, j: $j, k: $k <br>";
			}
		}
	}
	
?>
