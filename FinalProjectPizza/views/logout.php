<?php
    session_start();
    session_destroy();
    header("Location:".base_url."pizza/index");
?>
