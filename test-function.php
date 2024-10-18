<?php
 //function declaration
 function p(){
    return "<p>This paragraph came from a function</p>";
 }
 //function calls
 $output = p();
 $output .= "<h1>Just some heading</h1>";
 $output .=p();
 echo $output;