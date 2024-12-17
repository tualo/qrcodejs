<?php
namespace Tualo\Office\QRCodeJS;

use Tualo\Office\ExtJSCompiler\ICompiler;
use Tualo\Office\ExtJSCompiler\CompilerHelper;

class Compiler implements ICompiler {
    public static function getFiles(){
        return CompilerHelper::getFiles(__DIR__,'qrcodejs',10003);
    }
}