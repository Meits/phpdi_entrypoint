<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 21-Feb-20
 * Time: 10:21
 */

$files = array_merge(
    glob('../config/dependencies/*.php') ?: [],
    glob('../config/*.php') ?: []
);

$configs = array_map(
    static function (string $file): array {
        return require $file;
    },
    $files
);

return array_merge_recursive(...$configs);