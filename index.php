<?php
/*header("refresh: 5; http://localhost/ipvc_condominios/public/");

	echo '<title>Laravel Installed</title><div style="background: #e9ffed; border: 1px solid #b0dab7; padding: 15px;" align="center" >
	<font size="5" color="#182e7a">Laravel is installed successfully.</font><br /><br />
	<font size="4">Laravel is a Framework and doesn\'t have an index page.<br /><br />
	You will be redirected to its "public" folder in 5 seconds...<br /><br />
	Laravel is a clean and classy framework for PHP web development.

Freeing you from spaghetti code, Laravel helps you create wonderful applications using simple, expressive syntax. Development should be a creative experience that you enjoy, not something that is painful. Enjoy the fresh air.
</font></div>';*/
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
define('LARAVEL_START', microtime(true));
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Kernel::class);
$response = tap($kernel->handle(
    $request = Request::capture()
))->send();
$kernel->terminate($request, $response);
?>