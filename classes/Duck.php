<?php
class Duck extends Product implements DuckInterface
{
    public $age;
    public $name;
    public $size;
    public $color;
    public $voice = 'krya';
    public $voiceCount;
    public function sayCria($voice)
    {
        for($i = 0; $i < $voiceCount; $i++)
        {
            echo $voice;
        }
    }
    public function fly(){
        echo 'Duck is flying now';
    }
    public function swim(){
        echo 'Duck is swimming now';
    }

    public function __construct($name, $age, $size, $color, $voiceCount)
    {
        $this->age = $age;
        $this->name = $name;
        $this->size = $size;
        $this->color = $color;
        $this->voiceCount = $voiceCount;
    }
}
