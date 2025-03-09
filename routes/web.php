<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cpu-stress', function () {
// Tăng CPU bằng cách tính toán một vòng lặp lớn
    $result = 0;
    for ($i = 0; $i < 10000000000; $i++) {
        $result += sqrt($i); // Tính căn bậc hai liên tục để tiêu tốn CPU
    }
    return "CPU stress completed. Result: $result";
});
