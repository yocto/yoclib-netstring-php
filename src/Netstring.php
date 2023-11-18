<?php
namespace YOCLIB\Netstring;

class Netstring{

    private $string;

    /**
     * @return string
     */
    public function getString(){
        return $this->string;
    }

    /**
     * @param string string
     */
    public function setString($string): void{
        $this->string = $string;
    }

}