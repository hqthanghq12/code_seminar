<?php
    include "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "listsp":
                include "list.php";
                break;
            case "addsp":
                include "add.php";
                break;  
                case "bieudo":
                    include "bieudo.php";
                    break;  
            
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>
