<?php
    spl_autoload_register(function($class_name){require 'classes/'.$class_name.'.php';});

    //INSTANCES
    //countries
    $fr = new Country('France');
    $sp = new Country('Spain');
    $en = new Country('England');
    $it = new Country('Italy');
    $po = new Country('Portugal');
    $arg = new Country('Argentina');
    $br = new Country('Brazil');

    //clubs
    $psg = new Club('PSG',$fr);
    $rcs = new Club('Racing Club de Strasbourg', $fr);
    $barca = new Club('FC Barcelone', $sp);
    $juv = new Club('Juventus', $it);
    $manu = new Club('Manchester United', $en);
    $mad = new Club('Real Madrid', $sp);

    //players
    $mbappe = new Player('Mbappe', 'Kylian', 24, $fr);
    $cr7 = new Player('Ronaldo', 'Cristiano', 37, $po);
    $leo = new Player('Messi', 'Lionel', 34, $arg);
    $neymar = new Player('Junior', 'Neymar', 32, $br);

    //careers
    $c1 = new Career($mbappe, $psg, '2017');
    $c2 = new Career($cr7, $mad, '2009');
    $c3 = new Career($cr7, $juv, '2018');
    $c4 = new Career($cr7, $manu, '2021');
    $c5 = new Career($leo, $barca, '2004');
    $c6 = new Career($leo, $psg, '2021');
    $c7 = new Career($neymar, $barca, '2013');
    $c8 = new Career($neymar, $psg, '2017');



    //USE OF METHODS
    echo $leo;
?>  