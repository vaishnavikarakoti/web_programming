<?php
	$a=array("a"=>"Dog","b"=>"Cat","c"=>"Horse");
	echo array_shift($a); 
	print_r ($a); 
	
	$a=array("a"=>"Cat","b"=>"Dog");
	print_r(array_unshift($a,"Horse"));
?>