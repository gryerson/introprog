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

	$color = "purple";   
	
	if ( strcmp($color, "red")==0 || strcmp($color, "blue")==0 || strcmp($color, "green")==0 ) {
		print "You are allowed to play this game.";
	} else {
		print "You are not allowed to play this game.";
	}
?_>
-->
<!-- Below this line is our PHP code -->
<?php

	$color = "purple";   
	
	if ( strcmp($color, "red")==0 || strcmp($color, "blue")==0 || strcmp($color, "green")==0 ) {
		print "You are allowed to play this game.";
	} else {
		print "You are not allowed to play this game.";
	}

?>
