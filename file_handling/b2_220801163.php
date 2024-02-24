<?php//first you have to try writing first while doing both operations together

    $file=fopen("b2.txt","rw");
    //to read file
    //echo fgets($file);

    //to append file
    /*$content=" My address is Shantivan Parisar, Near Speed Well Party Plot, Nana Mauva, Rajkot. ";
    fwrite($file,$content);
    echo fgets($file);*/

    //read write together
    $con=" I like listening to music, cooking, drawing and dancing. ";
    fwrite($file,$con);
    echo fgets($file);

    fclose($file);

?>