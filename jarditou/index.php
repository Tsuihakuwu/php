<?php

include_once('header.php');

include_once('nav.php');

if(!isset($_GET['p']) || isset($_GET['p']) && $_GET['p']==0){
    include('acceuil.php');
}
elseif(isset($_GET['p']) && $_GET['p']==1){
    include('tab.php');
}
elseif(isset($_GET['p']) && $_GET['p']==2){
    include('form.php');
}

include('aside.php');

include_once('footer.php'); 

?>