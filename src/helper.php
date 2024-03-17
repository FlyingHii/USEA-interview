<?php
if (!function_exists('container')) {
    function container()
    {
        global $container;
        if($container) return $container;
        $builder = new \DI\ContainerBuilder();
        return $container = $builder->build();
    }
}
