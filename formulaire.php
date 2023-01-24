<?php
	$df= fopen('/home/a-derchain/Bureau/liste.pdf','w');  //Met les informations dans un pdf
	fwrite($df,$_POST['lname'].", ".$_POST['fname'].", ".$_POST['age'].", "
		.$_POST['rue'].", ".$_POST['cp'].", ".$_POST['ville'].", ".$_POST['mail'].", ".$_POST['num-tel']);
	fclose($df);


?>
