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

	$answer = 11;
	
	if ($answer >= 10) {
		print "You got at least 10!";
	} elseif (answer >= 5) {
		print "You got at least 5!";
	} elseif (answer >= 3) {
		print "You got at least 3!";
	} else {
		print "You got less than 3.";
	}

?_>
-->
<!-- Below this line is our PHP code -->
<?php

	$answer = 11;
	
	if ($answer >= 10) {
		print "You got at least 10!";
	} elseif (answer >= 5) {
		print "You got at least 5!";
	} elseif (answer >= 3) {
		print "You got at least 3!";
	} else {
		print "You got less than 3.";
	}

?>

