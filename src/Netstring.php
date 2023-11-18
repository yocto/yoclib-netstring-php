<?php
namespace YOCLIB\Netstring;

use Exception;

class Netstring{

    /**
     * @var int $maxLength
     */
    private static $maxLength = 2000000;

    /**
     * @return int
     */
    public static function getMaxLength(){
        return self::$maxLength;
    }

    /**
     * @param $maxLength
     * @return void
     */
    public static function setMaxLength($maxLength){
        self::$maxLength = $maxLength;
    }

    /**
     * @return string
     * @throws Exception
     */
    public static function decode($string){
        $length = explode(':',$string,2)[0] ?? null;
        if($length==null){
            throw new Exception('Netstring does not have a semicolon.');
        }
        $semicolon = $string[strlen($length)] ?? null;
        if($semicolon!=':'){
            throw new Exception('Expecting semicolon. Was \''.$semicolon.'\'.');
        }
        $data = substr($string,strlen($length)+1,intval($length));
        $comma = $string[strlen($length)+1+intval($length)] ?? null;
        if($comma!=','){
            throw new Exception('Expecting comma. Was \''.$comma.'\'.');
        }
        return $data;
    }

    /**
     * @return string
     * @throws Exception
     */
    public static function encode($string){
        if(strlen($string)>self::$maxLength){
            throw new Exception('Length of '.strlen($string).' exceeding '.self::$maxLength.' during encoding.');
        }
        return strlen($string).':'.$string.',';
    }

}