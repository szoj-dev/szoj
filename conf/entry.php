<?php
/**
 * entry.php
 * (c) 2022 Shuzhou Liu
 * Code served under the MIT License
 * 
 * This file is part of the project "szoj".
 * 
 * This file is used in front of every page.
 */

session_start();
include_once "./conf/read.php";
$config = read_config();

$con = mysqli_connect(
    $config["database"]["host"],
    $config["database"]["username"],
    $config["database"]["password"],
    $config["database"]["database"],
    (int) $config["database"]["port"]
);
if (!$con) die("Error: Cannot connect to database.");

$locale = $_SESSION["locale"];
if ($locale === null) {
    $locale = $config["locale"]["default"];
    $_SESSION["locale"] = $locale;
}
?>