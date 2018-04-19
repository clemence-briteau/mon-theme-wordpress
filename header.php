<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php wp_head(); ?>
</head>

<body>

    <div id="page">

        <div id="header">
            <h1>
                <a href="<?php bloginfo('url'); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <?php bloginfo('description'); ?>
        </div>

