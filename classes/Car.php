<?php
class Car extends Product implements CarInterface
{
    public function checkTheEnvironmentalFriendliness ($engineType)
    {
        if ($engineType != 'electric')
        {
            echo 'This car is not eco-friendly';
        }
        else
        {
            echo 'This car is eco-friendly';
        }
    }
    public $model;
    public $yearOfIssue;
    public $enginePower;
    public $engineType;
    public $bodyType;
    public $color;

    public function __construct($model, $yearOfIssue, $enginePower, $engineType, $bodyType, $color)
    {
        $this->model = $model;
        $this->yearOfIssue = $yearOfIssue;
        $this->enginePower = $enginePower;
        $this->engineType = $engineType;
        $this->bodyType = $bodyType;
        $this->color = $color;
    }
}