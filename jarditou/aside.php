            <!--Aside-->
<?php           if(!isset($_GET['p']) || isset($_GET['p']) && $_GET['p']==0){
    echo '          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">';
}
elseif(isset($_GET['p']) && $_GET['p']==1){
    echo '';
}
elseif(isset($_GET['p']) && $_GET['p']==2){
    echo '';
}
?>

<aside

<?php

if(!isset($_GET['p']) || isset($_GET['p']) && $_GET['p']==0){
    echo ' style="background-color: #c7ffbc;" class="h-100"';
}
elseif(isset($_GET['p']) && $_GET['p']==1){
    echo 'class="d-none" id="aside"';
}
elseif(isset($_GET['p']) && $_GET['p']==2){
    echo 'class="d-none" id="aside"';
}

?>
                >[COLONNE DROITE]</aside>
            </div>
        </div>