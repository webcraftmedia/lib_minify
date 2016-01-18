<?php
namespace LIB;
class lib_minify extends \LIB\lib_php{
    public static function get_class(){
        return self::class;}
    public static function php_autoload(){
        \SYSTEM\autoload::registerFolder(\dirname(__FILE__).'lib/src/','MatthiasMullie\Minify');
        return true;}
    public static function version(){
        return 'https://github.com/matthiasmullie/minify';}
}