<?php

if(isset($_POST['prato'])) {
    foreach($_POST['prato'] as $pratos){
        print "Parabens pelo seu prato $pratos! \n";
    }
}

?>