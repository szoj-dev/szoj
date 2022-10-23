<?php
include_once "./conf/entry.php";
include_once "./conf/head.php";
// if request method is post
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $u = $_POST["username"];
    $p = $_POST["password"];
    $result = mysqli_query($con, "SELECT * FROM `usr` WHERE `userName` = '$u';");
    if (mysqli_num_rows($result) == 0)
        echo "<script>alert('$unotfound');</script>";
    else {
        $row = mysqli_fetch_assoc($result);
        $row["privTable"] = json_decode($row["privTable"], true);
        if (password_verify($p, $row["userPwd"])) {
            $_SESSION["usr"] = json_encode($row, JSON_UNESCAPED_UNICODE);
            header("Location: /");
            exit();
        } else
            echo "<script>alert('$pincorrect');</script>";
    }
}
?><!doctype html>
<html lang="<?php echo $locale; ?>">
    <head>
        <?php genHead($home); ?>
        <style>
            body {
                padding-top: 70px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h3><?php echo $signin; ?></h3>
            <form method="post">
                <div class="form-group">
                    <label for="username"><?php echo $username; ?></label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="<?php echo $username; ?>" autocomplete="off">
                </div><br>
                <div class="form-group">
                    <label for="password"><?php echo $password; ?></label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="<?php echo $password; ?>" autocomplete="off">
                </div><br>
                <button type="submit" class="btn btn-primary"><?php echo $signin; ?></button>
            </form>
            <div class="footer text-center">
                &copy; <?php echo date("Y"); ?> <?php echo $config["szoj"]["name"]; ?> | 
                <a href="/setlocale.php?loc=en_US&ret=<?php echo urlencode($_SERVER["REQUEST_URI"]); ?>">English (United States)</a> | 
                <a href="/setlocale.php?loc=zh_CN&ret=<?php echo urlencode($_SERVER["REQUEST_URI"]); ?>">简体中文</a>
            </div>
        </div>
    </body>
</html>