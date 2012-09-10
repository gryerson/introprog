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

	
?_>
-->
<!-- Below this line is our PHP code -->
<?php

	$family = array('Lori', 'James', 'Olivia', 'Sami');
	
	$size = count($family);
	
	print "1.) This is my family:<br>";
	for ($i = 0; $i < $size; $i=$i+1) {
		print "family member: $i = $family[$i]<br>";
	}

	print "<br>2.) This is my family:<br>";
	foreach ($family as $var => $val) {
		print " family member: $var = $val<br>";
	}


	$myfamily = array("Mom"=>"Lori", "Dad"=>"James", "Kid1"=>"Olivia", "Kid2"=>"Sami");

	print "<br>3.) This is my family:<br>";
	foreach ($myfamily as $var => $val) {
		print "family member: $var = $val<br>";
	}

?>