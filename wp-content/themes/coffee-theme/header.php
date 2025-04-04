<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">COFFEE</div>
            <nav>
                <ul>
                    <?php

                    $args = array(
                        'theme_location' => 'primary'
                    );

                    ?>

                    <?php wp_nav_menu($args); ?>


                </ul>
            </nav>
        </div>
    </header>