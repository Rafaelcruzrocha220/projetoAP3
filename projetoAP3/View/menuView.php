<?php

class menuView 
{
    
    public function menu($userLogin){
        if($userLogin == true){
            return "login.php";
        }else{
            return "logout.php";
        }
    }
}
