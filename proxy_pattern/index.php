<?php

class Manager {
    public function receiveRequest($offer): void
    {
        echo "BOSS said: Ok:::::::::: " . $offer;
    }
}

class Leader {

    public Manager $manager;
    public function __construct()
    {
        $this->manager = new Manager;
    }

    public function receiveRequest($offer): void
    {
        $this->manager->receiveRequest($offer);
    }
}

class Developer {
    public string $offer;
    public function __construct(string $offer)
    {
        $this->offer = $offer;
    }

    public function applyFor(Leader $leader): void
    {
        $leader->receiveRequest($this->offer);
    }
}


$devs = new Developer("Tăng 30% mức lương hiện tại");
$devs->applyFor(new Leader());
