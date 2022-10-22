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
    $config = parse_ini_file("./config.ini", true);
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
    
    return $config;
}
?>