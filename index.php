<?php

function _onPayment(){
    
}
function _onValidation(){

}
    if(isset($_GET['hook'])){
        $hook = $_GET['hook'];
        switch ($hook) {
            case '123':
                _onPayment();
                break;
            case '423':
                _onValidation();
                break;
            default:
                echo("Vous avez entré un code invalide");
                break;
        }
    }
?>