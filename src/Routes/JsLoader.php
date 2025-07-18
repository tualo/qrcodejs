<?php

namespace Tualo\Office\QRCodeJS\Routes;

use Tualo\Office\Basic\TualoApplication as App;
use Tualo\Office\Basic\RouteSecurityHelper;
use Tualo\Office\Basic\Route as BasicRoute;
use Tualo\Office\Basic\IRoute;

class JsLoader implements IRoute
{
    public static function register()
    {


        BasicRoute::add('/jsqrcodejs/(?P<file>[\w.\/\-]+).js', function ($matches) {

            RouteSecurityHelper::serveSecureStaticFile(
                $matches['file'] . '.js',
                dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'lazy',
                ['js'],
                [
                    'js' => 'application/javascript',

                ]
            );
        }, ['get'], false);

        BasicRoute::add('/jsqrcodejs-lib/(?P<file>[\w.\/\-]+).js', function ($matches) {

            RouteSecurityHelper::serveSecureStaticFile(
                $matches['file'] . '.js',
                dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'lib',
                ['js'],
                [
                    'js' => 'application/javascript',

                ]
            );
        }, ['get'], false);
    }
}
