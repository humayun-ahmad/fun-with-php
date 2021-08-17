<?php
    // strlen() - Return the Length of a String
    $st = "This is the main section!";
    echo nl2br("The string length is : ".strlen($st."\r\n"));

    // for printing new line
    echo nl2br("\nYou will find the \n newlines in this string \r\n on the browser window.\n");  

    // str_word_count() - Count Words in a String
    echo "Strings have ".str_word_count($st)." words!";

    // strrev() - Reverse a String
    echo nl2br("\n".strrev($st)."\n");

    // strpos() - Search For a Text Within a String

    echo strpos($st,"main");

    // str_replace() - Replace Text Within a String
    // Replace the text "world" with "Dolly":

    echo nl2br("\n".str_replace("world", "Dolly", "Hello world!")."\n" );


    


?>