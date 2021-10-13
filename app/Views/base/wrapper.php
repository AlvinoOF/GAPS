<?php
    include_once "header.php";
    if(isset($pages)){
        $this->load->view($pages);
    }else{
        include_once "empty.php";
    }
    include_once "footer.php";
?>