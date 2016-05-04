<?php


class Pen extends WritingAccessories
{
    private $widthLine;
    private $inkColor;
    private $activate = false;

    public function __construct($inkColor, $widthLine, $bodyColor = "", $description = "", $manufacturer = "")
    {
        parent::__construct( $bodyColor, $description, $manufacturer);
        $this->inkColor = $inkColor;
        $this->widthLine = $widthLine;
    }

    public function getWidthLine()
    {
        return $this->widthLine;
    }

    public function getInkColor()
    {
        return $this->inkColor;
    }

    public function getActivate()
    {
        return $this->activate;
    }

    public function write($text)
    {
        if($this->activate) {
            print("Write(line:$this->widthLine mm, color: $this->inkColor):$text <br>");
        }else{
            print("Automatic pen off <br>");
        }
    }

    public function press()
    {
        if($this->activate){
            $this->activate = false;
            print( "Off<br>");
        } else{
            $this->activate = true;
            print( "On<br>");}
    }
}