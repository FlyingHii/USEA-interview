<?php
if (!function_exists('container')) {
    function container()
    {
        $builder = new \DI\ContainerBuilder();
        return $builder->build();
    }
}
