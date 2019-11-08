<?php
// Prvo deklarišem promjenljive veličine r i PI//
    $r=2;
    $PI=3.14;
    {
        // U blok stavljam formulu za površinu kruga, s tim da pozivam već unaprijed definisane promjenljive//
        $area=$r*$r*$PI;
        
    }
    {
        $perimeter=2*$r*$PI;
    }
    //Ispisivanje površine kruga//
    echo "Površina kruga je :" . $area . " cm." ; //Kvaka je što sam stavio ; //
    echo "Perimeter je :". $perimeter . "cm."
  
    
?>