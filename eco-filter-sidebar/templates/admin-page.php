<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<div class="wrap">

    <h1>Eco Filter Sidebar</h1>

    <p>
        <strong>Версия:</strong>
        <?php echo esc_html(ECO_FILTER_VERSION); ?>
    </p>

    <form method="post" action="options.php">

        <?php settings_fields('eco_filter_sidebar'); ?>

        <table class="form-table">

            <tr>
                <th>Категории</th>
                <td>
                    <label>
                        <input
                            type="checkbox"
                            name="eco_filter_sidebar_options[categories]"
                            value="1"
                            <?php checked(!empty($options['categories'])); ?>
                        >
                        Включить отображение категорий
                    </label>
                </td>
            </tr>

            <tr>
                <th>Фильтр цены</th>
                <td>
                    <label>
                        <input
                            type="checkbox"
                            name="eco_filter_sidebar_options[price]"
                            value="1"
                            <?php checked(!empty($options['price'])); ?>
                        >
                        Включить фильтр цены
                    </label>
                </td>
            </tr>

            <tr>
                <th>Наличие</th>
                <td>
                    <label>
                        <input
                            type="checkbox"
                            name="eco_filter_sidebar_options[stock]"
                            value="1"
                            <?php checked(!empty($options['stock'])); ?>
                        >
                        Показывать фильтр наличия
                    </label>
                </td>
            </tr>

            <tr>
                <th>Количество товаров</th>
                <td>
                    <label>
                        <input
                            type="checkbox"
                            name="eco_filter_sidebar_options[counts]"
                            value="1"
                            <?php checked(!empty($options['counts'])); ?>
                        >
                        Показывать количество товаров
                    </label>
                </td>
            </tr>

            <tr>
                <th>AJAX</th>
                <td>
                    <label>
                        <input
                            type="checkbox"
                            name="eco_filter_sidebar_options[ajax]"
                            value="1"
                            <?php checked(!empty($options['ajax'])); ?>
                        >
                        Включить AJAX-фильтрацию
                    </label>
                </td>
            </tr>

        </table>

        <?php submit_button('Сохранить настройки'); ?>

    </form>

</div>