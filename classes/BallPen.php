<?php
class BallPen extends Product implements BallPenInterface
{
    public function write ($inkColor)
    {
        if (is_null($inkColor) == true)
        {
            echo 'В ручке нет чернил';
        }
        else
        {
            echo 'Ручка пишет цветом ' . $inkColor;
        }
    }
    public $bodyColor;
    public $size;
    public $withButton;
    public $inkColor;

    public function __construct($bodyColor, $size, $withButton, $inkColor)
    {
        $this->bodyColor = $bodyColor;
        $this->size = $size;
        $this->withButton = $withButton;
        $this->inkColor = $inkColor;
    }
}