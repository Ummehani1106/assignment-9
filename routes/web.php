
<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    $team = ['Hani', 'Mona', 'Habibah'];
    return view('about', compact('team'));
});

?>