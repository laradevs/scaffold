<?php

$this->publishes([
    __DIR__ . '/config/scaffold.php' => config_path('scaffold.php')
], 'laradevs-scaffold-config');

$this->publishes([
    __DIR__.'/views' => resource_path('views/vendor/scaffold'),
], 'laradevs-scaffold-views');