<?php


class Pen extends WritingAccessories
{
    private $widthLine;
    private $inkColor;

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

    public function write($text)
    {
        print("Write(line:$this->widthLine mm, color: $this->inkColor):$text ");
    }
}