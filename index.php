<?php

require_once './config/Core.php';
require_once './app/controllers/Routes.php';

date_default_timezone_set(TIMEZONE);

require_once './vendor/autoload.php';

Routes::View();