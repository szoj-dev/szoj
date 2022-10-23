<?php
/**
 * read.php
 * (c) 2022 Shuzhou Liu
 * Code served under the MIT License
 * 
 * This file is part of the project "szoj".
 * 
 * This file is used to read the configuration file.
 */
function read_config() {
    $config = parse_ini_file("config.ini", true);
    if ($config === false) {
        die("Error: Cannot read configuration file.");
    }
    if ($config["database"]["host"] === "")
        $config["database"]["host"] = "localhost";
    if ($config["database"]["username"] === "")
        $config["database"]["username"] = "root";
    if ($config["database"]["database"] === "")
        $config["database"]["database"] = "szoj";
    if ($config["database"]["port"] === "")
        $config["database"]["port"] = "3306";
    if ($config["szoj"]["name"] === "")
        $config["szoj"]["name"] = "szoj";
    if ($config["szoj"]["description"] === "")
        $config["szoj"]["description"] = "SZOJ";
    if ($config["szoj"]["keywords"] === "")
        $config["szoj"]["keywords"] = "SZOJ, Online Judge";
    if ($config["szoj"]["charset"] === "")
        $config["szoj"]["charset"] = "UTF-8";
    if ($config["szoj"]["viewport"] === "")
        $config["szoj"]["viewport"] = true;
    if ($config["szoj"]["https"] === "")
        $config["szoj"]["https"] = false;
    if ($config["locale"]["default"] === "")
        $config["locale"]["default"] = "en_US";
    return $config;
}
?>