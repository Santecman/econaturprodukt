<?php

if (!defined('ABSPATH')) {
    exit;
}

abstract class Eco_Filter_Module
{
    /**
     * Включен ли модуль
     */
    protected static function enabled(string $option): bool
    {
        return Eco_Filter_Config::enabled($option);
    }

    /**
     * Вывести модуль
     */
    abstract public static function render(): void;
}