<?php


class Pen extends WritingAccessories
{
    private $widthLine;
    private $inkColor = [];
    private $activate = false;
    private $currentColor;

    public function __construct($widthLine, $inkColor, $bodyColor = "", $description = "", $manufacturer = "")
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
    public function getCurrentColor()
    {
        return $this->activate;
    }

    public function write($text)
    {
        if ($this->activate) {
            print("Write(line:$this->widthLine mm, color: $this->currentColor):$text <br>");
        } else {
            print("Automatic pen off  <br>");
        }
    }
    //color choice with the inclusion of (true)
    public function press($color, $activate = false)
    {
        if(($color < 0) || ($color >= sizeof($this->inkColor))){
            print "Color is not present<br>";
            return ;
        }
        if(!$activate){
            $this->activate = false;
            print( "Off<br>");
        } else{
            $this->activate = true;
            $this->currentColor = $this->inkColor[$color];
            print( "On $this->currentColor<br>");
        }
    }

}