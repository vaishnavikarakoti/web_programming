<?php
    // to open file
    $file=fopen("b2.txt","rw");
    
	//to read file
	/*
	    $file=fopen("b2.txt","rw");
	    echo fgets($file);
	*/
    
    //to write in file
	/*
	    $file=fopen("b2.txt","rw");
		$text="My Self Vaishnavi Karakoti..";
		fwrite=($file,$text);
	  
	*/
	
    //to append file
    /*
		$content=" My address is 12/A, Airport road, Rajkot-360007 ";
        file_put_contents("b2.txt",$content, FILE_APPEND);
		
		
	*/

    //read write together
	
    $con=" I like listening to music, cooking, drawing and dancing. ";
    fwrite($file,$con);
    echo fgets($file);
    
	//to close file
    fclose($file);

?>