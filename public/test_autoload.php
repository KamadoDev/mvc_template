<?php

use App\Controllers\Frontend\HomeController;
require_once 'vendor/autoload.php';


// Kiểm tra xem class có tồn tại không
if (class_exists('App\Controllers\Frontend\HomeController')) {
    echo "Autoloader hoạt động tốt!";
    $controller = new HomeController();
} else {
    echo "Có lỗi với autoloader";
}