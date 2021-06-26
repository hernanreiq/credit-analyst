<?php
    if(isset($_SESSION['alertas-positivas'])){
        unset($_SESSION['alertas-positivas']);
    }
    if(isset($_SESSION['alertas-negativas'])){
       unset($_SESSION['alertas-negativas']);
    }
?>