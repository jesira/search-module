<?php
//TO DO DB

//DB +JSON

$mysqli = new mysqli('localhost','root','','phpblog');

$result = $mysqli->query("SELECT * FROM posts");

//Copy result into a associative array

/*

$people[] = "Jesira";
$people[] = "sultana";
$people[] = "Ruhi";
$people[] = "Junaina";
$people[] = "sultana";
$people[] = "Era";
*/
//Get Query String
$q = $_REQUEST['q'];

$suggestion = "";

//Get Suggestion
if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);

    while ($person= mysqli_fetch_assoc($result)){
        if(stristr($q , substr($person['author'],0, $len))){
            if($suggestion ===""){
                $suggestion = JSON_encode($person);
            }else{
/*
                $suggestion .= ",".JSON_encode($person);*/
            }

        }
    }
}

echo $suggestion ===""? "No suggestion ": $suggestion;




?>


