<?php

if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="eco-sidebar">

    <?php

    Eco_Filter_Categories::render();

    if (Eco_Filter_Config::enabled('price')) {
        Eco_Filter_Price::render();
    }

    if (Eco_Filter_Config::enabled('stock')) {
        Eco_Filter_Stock::render();
    }

    ?>

</div>