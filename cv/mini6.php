<?php

// Prints a file into the packet positionally dependent
    function display($path) {
        $file = fopen($path,"r");
        while(!feof($file)) {
        $line = fgets($file);
        echo $line;
        }
        fclose($file);
        }



    display("/home/2021/sabdul37/public_html/mini6/matter/mini6header.txt");

    if (sizeof($_GET)==0 || $_GET["Page"]=="HOME") {
        display("/home/2021/sabdul37/public_html/mini6/matter/mini6home.txt");
        } 
    else if ($_GET["Page"]=="HOBBIES") {
        display("/home/2021/sabdul37/public_html/mini6/matter/mini6hobbies.txt");
    }
    else {
        echo "404: Invalid Page!";
    }

    display("/home/2021/sabdul37/public_html/mini6/matter/mini6footer.txt");
