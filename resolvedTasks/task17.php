<?php

/*
#  Generate Dynamic php

You have the following array: 
```$ArrX = ['Mara','are','mere','multe'];```

Please write dinamically like this:

```
<p>Mara</p>
<p>are</p>
<p>mere</p>
<p>multe</p>
```

USe task17.php as a already prewritten file


*/

$ArrX = ['Mara','are','mere','multe'];
/*
foreach ($ArrX as $key => $value) {
	echo "<p>".$value."</p>";
}
*/
$i = 0;
while ( $i<= count($ArrX)-1) {

	?>
	<p><?php echo $ArrX[$i];?></p>
	<?php
	$i++;
}





?>