<?php

declare(strict_types=1);

function redirect(string $path)
{
    header("Location: ${path}");
    exit;
}


// function showLists(){
//     (SELECT * FROM lists WHERE user_id = "") 
// }