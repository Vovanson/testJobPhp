<?php


class Pen extends WritingAccessories
{
    private $widthLine;
    private $inkColor;
    private $activate = false;

    public function __construct($widthLine, $bodyColor = "", $description = "", $manufacturer = "", $inkColor = "gray")
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
            $this->activate = false;//lead decreased
        } else {
            print("Push pencil lead <br>");
        }
    }

    public function press()
    {
        $this->activate = true; //push lead
        print("Push<br>");
    }
}