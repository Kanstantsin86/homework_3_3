<?php
class TV extends Product implements TvInterface
{
    public function SelectChannel($numberOfChannels)
    {
        echo 'Выберите канал от 1 до ' . $numberOfChannels;
    }
    public $model;
    public $yearOfIssue;
    public $screenType;
    public $isDigital;
    public $screenSize;
    public $numberOfColors;
    public $remoteControl;
    public $internetConnection;
    public $smartTv;
    public $numberOfChannels;

    public function __construct($model, $yearOfIssue, $screenType, $isDigital, $screenSize, $numberOfColors, $remoteControl, $internetConnection, $smartTv, $numberOfChannels )
    {
        $this->model = $model;
        $this->yearOfIssue = $yearOfIssue;
        $this->screenType = $screenType;
        $this->isDigital = $isDigital;
        $this->screenSize = $screenSize;
        $this->numberOfColors = $numberOfColors;
        $this->remoteControl = $remoteControl;
        $this->internetConnection = $internetConnection;
        $this->smartTv = $smartTv;
        $this->numberOfChannels = $numberOfChannels;
    }
}