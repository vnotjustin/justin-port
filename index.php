<?php
require('modules/header.php'); //Header Information   

if(isset($_GET['page'])){
    $class = $_GET['page'];
}

function changeClass(){
   if($class = 'home'){
    echo
        '<body>
        <br>
        <div class="wrapper lineind">';
}   elseif($class = 'resume'){
    echo
        '<body>
        <br>
        <div class="wrapper lineres">';   
}   elseif($class = 'contact'){
    echo
        '<body>
        <br>
        <div class="wrapper linecont cont">';   
}   elseif($class = 'writingportf' or $class = 'programportf' or $class = 'artportf'){
    echo
        '<body>
        <br>
        <div class="wrapper linewrit">';   
}
}

require('modules/nav.php'); //Nav Bar

//Page Content
if(isset($_GET['page'])){
    $filename = 'content/'.$_GET['page'].'.php';
    if(file_exists($filename)){
        include($filename);
    } else{
        include('modules/404.php');
    }
} else {
    include('content/home.php');
}

require('modules/footer.php'); //Footer