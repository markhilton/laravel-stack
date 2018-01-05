<?php

// set up NewRelic for current environment
// add this at the top of laravel/bootstrap/app.php
if (in_array(env('APP_ENV'), explode(',', env('NEWRELIC_ENVIRONMENT', 'production')))) { 
	ini_set('newrelic.appname', env('APP_NAME'));
	ini_set('newrelic.license', env('NEWRELIC_LICENSE'));
} else {
	newrelic_ignore_transaction(); 
}
