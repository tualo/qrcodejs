<?php

namespace Tualo\Office\QRCodeJS\Middlewares;

use Tualo\Office\Basic\TualoApplication as App;
use Tualo\Office\Basic\IMiddleware;

class Middleware implements IMiddleware
{
    public static function register()
    {
        App::use('QRCodeJS', function () {

            try {
                // require.config({ paths: { 'bcrypt': './papervotelibrary/bcrypt.js' }});
                App::javascript('qrcodejs_lib', './jsqrcodejs-lib/qrcode.min.js', [], 0);
            } catch (\Exception $e) {
                App::set('maintanceMode', 'on');
                App::addError($e->getMessage());
            }
        }, -100, [
            'needActiveSession' => true,
        ]);
    }
}
