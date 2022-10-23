<?php
    session_start();
    $_SESSION["locale"] = $_GET["loc"];
    header("Location: ".$_GET["ret"]);
    exit();
?>