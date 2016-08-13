<?php

class multiThreadExample extends Thread{

    private $threadID;

    function __cunstruct($id){
        $this->threadID = $id;
    }

    public function run(){
        sleep(rand(0,3));
        echo "Worker ($this->threadID) ran". PHP_EOL;
    }
}

$multiThread=[];
foreach(range(0,5) as $i){
    $multiThread[$i] = new multiThreadExample($i);
    $multiThread[$i]->start();
}

foreach(range(0,5) as $i){
    $multiThread[$i]->join();
}