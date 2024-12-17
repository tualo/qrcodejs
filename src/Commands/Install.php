<?php
namespace Tualo\Office\QRCodeJS\Commandline;
use Tualo\Office\Basic\ICommandline;
use Tualo\Office\Basic\CommandLineInstallSQL;

class Install extends CommandLineInstallSQL  implements ICommandline{
    public static function getDir():string {   return dirname(__DIR__,1); }
    public static $shortName  = 'qrcodejs';
    public static $files = [
        'install/ds_class' => 'setup ds_class ',
        
    ];
    
}