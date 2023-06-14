<?php
class Logger{
    private $dir;
    function __construct($dirName = "logs")
    {
        $this->dir = getcwd()."/".$dirName;
        if(!file_exists($this->dir)){
            mkdir($this->dir);
        }
    }
    function timeStamp(){
        $now = date("[d/m/Y H:i:s]");
        return $now;
    }
    function getFileName(){
        return date("Y_m_d").".log";
    }
    function log($format, ...$params){
        if(!empty($params)) $content =  sprintf($format, $params);
        else $content = $format;

        $content = $this->timeStamp().": ".$content."\n";
        $filename = $this->dir."/".$this->getFileName();
        $file = fopen($filename, "a");
        fwrite($file, $content);
        fclose($file);
    }
}
