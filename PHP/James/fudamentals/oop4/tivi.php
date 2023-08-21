<?php
class Tv
{
    private $status = false;
    private $sound;
    private $channel;

    public function __construct($channel, $sound)
    {
        $this->sound = $sound;
        $this->channel = $channel;
    }

    public function setSound($sound)
    {
        $this->sound = $sound;
    }
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }
    public function getChannel()
    {
        return $this->channel;
    }

    public function getSound()
    {
        return $this->sound;
    }

    public function turnOn()
    {
        return $this->status = true;
    }

    public function turnOff()
    {
        return $this->status = false;
    }

    public function __toString()
    {
        if ($this->status == true) {
            return "Status: " . $this->status . " Sound: " . $this->sound . " Channel: " . $this->channel;
        } else {
            return "TV is off";
        }
    }
}

class remote
{
    private $id;
    private Tv $tv;

    public function __construct( $id, Tv $tv)
    {
        $this->id = $id;
        $this->tv = $tv;
    }

    public function settingSound($level)
    {
        if ($this->tv != null) {
            $oldSound = $this->tv->getSound();
            if($oldSound + $level >= 100){
                $this->tv->setSound(100);
            }else{
                $this->tv->setSound($oldSound + $level);
            }
            
        }
    }

    public function settingChannel($change)
    {
        if ($this->tv != null) {
            $this->tv->setChannel($change);
        }
    }

    public function turnOn()
    {
        if ($this->tv != null) {
            $this->tv->turnOn();
        }
    }

    public function turnOff()
    {
        if ($this->tv != null) {
            $this->tv->turnOff();
        }
    }
}


$tivi = new Tv("TRT Huế", 20);     // channel: 15, sound: 20
$tivi->turnOn();
echo " Giá trị khởi tạo ban đầu của tivi là : " . $tivi . "<br>";

$remote = new remote("LG101", $tivi);

$remote->settingChannel("VTV3");
$remote->settingSound(2);
$remote->turnOff();
echo " Giá trị khởi tạo ban đầu của tivi là : " . $tivi . "<br>";

$remote->turnOn();

echo " Giá trị khởi tạo ban đầu của tivi là : " . $tivi . "<br>";
