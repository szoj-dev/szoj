<?php
    include_once "./conf/entry.php";
    function genHead ($title) {
        global $config;
        ?><title><?php echo $title; ?> - SZOJ</title>
        <meta charset="<?php echo $config["szoj"]["charset"]; ?>">
        <?php if ($config["szoj"]["viewport"] === true) { ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php } ?>
        <meta name="keywords" content="<?php echo $config["szoj"]["keywords"]; ?>">
        <meta name="description" content="<?php echo $config["szoj"]["description"]; ?>">
        <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/dist/css/bootstrap-theme.min.css">
        <!-- mathjax -->
        <script>
        MathJax = {
            tex: {
                inlineMath: [
                    ['$', '$'],
                    ['\\(', '\\)']
                ]
            },
            svg: {
                fontCache: 'global'
            }
        };
        </script>
        <script src="/dist/js/tex-svg.js"></script>
        <script src="/dist/js/bootstrap.bundle.min.js"></script>
        <?php
    }
?>