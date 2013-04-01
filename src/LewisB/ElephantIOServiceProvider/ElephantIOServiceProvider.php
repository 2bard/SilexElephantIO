<?php
namespace LewisB\ElephantIOServiceProvider;

use Silex\Application;
use Silex\ServiceProviderInterface;

class ElephantIOServiceProvider implements ServiceProviderInterface
{
	private $defaultAddress = "http://127.0.0.1:4568";
    
    public function register(Application $app)
    {
        $app['elephant'] = $app->share(function ($app) {    
		   $address = isset($app['elephant.address']) ? $app['elephant.address'] : $this->defaultAddress;
           $client = new ElephantIO\Client($address, 'socket.io', 1, false, true, true);
           return $client;
        });
        
    }

    public function boot(Application $app)
    {
    	
    }
}