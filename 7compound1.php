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

	$age = 7;
	$grade = 2;
	
	if ($age >= 8) {
		if ($grade >= 3) {
			print "You can play this game.";
		}
	} else {
		print "Sorry, you can't play the game.";
	}
	
?_>
-->
<!-- Below this line is our PHP code -->
<?php

	$age = 7;
	$grade = 2;
	
	if ($age >= 8) {
		if ($grade >= 3) {
			print "You can play this game.";
		}
	} else {
		print "Sorry, you can't play the game.";
	}
	
?>
