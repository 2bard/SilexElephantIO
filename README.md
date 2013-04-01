#Pheanstalk Service Provider for Silex 

This is a service provider for the Silex PHP Microframework, it provides access to socket.io via ElephantIO.

##Installation

1. Add to your `composer.json` file

	``` json
	
		"require": {
			"lewisbaker/silex-elephantio": "dev-master"
		}
	
	```

2. Install the dependencies

	php composer.phar update
	

## Registering

	<?php
	
	$app->register(new LewisB\ElephantIOServiceProvider\ElephantIOServiceProvider(), array(
	    'elephant.address' => 'http://localhost:4568'
	));


Licensed under the MIT license.