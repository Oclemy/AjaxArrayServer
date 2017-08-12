<?php


class ArrayServer
{
    public function sendSpacecrafts()
    {
        $spacecrafts=["Casini","Spitzer","Enterprise","Hubble","Voyager","Galileo","Pioneer","WMAP"];
        echo json_encode($spacecrafts);
    }

}

$arrayserver=new ArrayServer();
$arrayserver->sendSpacecrafts();