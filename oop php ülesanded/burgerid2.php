<?php


//Siin defineerin parent burgeri

class Burger{


    //siin annan burgeritele põhi väärtused
    public $nimetus = 'Grill burger';
    public $liha = 'Veiseliha pihv';
    public $sai = 'valge';
    public $hind = 1;
    public $lisand1 = 'tomat';
    public $lisand1Hind = 0.30;
    public $lisand2 = 'hapukurk';
    public $lisand2Hind = 0.20;
    public $lisand3 = 'sibul';
    public $lisand3Hind = 0.15;
    public $lisand4 = 'juust';
    public $lisand4Hind = 0.30;

    //funktsioon burgeri summa arvutamiseks.

    public function BurgerSumma(){
        return
            $this -> hind +
            $this -> lisand1Hind +
            $this -> lisand2Hind +
            $this -> lisand3Hind +
            $this -> lisand4Hind
            ;
    }

    // Tellimuse väljastamine

    public function MidaTeTellisite(){
        return  'Te tellisite: '.           $this -> nimetus.
            '<br> milles on lihaks: ' .     $this -> liha.
            '<br> milles on saiaks: ' .     $this -> sai.
            '<br> milles on lisand 1:' .    $this -> lisand1.
            '<br> milles on lisand 2:' .    $this -> lisand2.
            '<br> milles on lisand 3:' .    $this -> lisand3.
            '<br> milles on lisand 4:' .    $this -> lisand4.
            '<br><br> See maksis teile:'.   $this -> BurgerSumma()
            ;
    }
}


class TervislikBurger extends Burger{


    public $nimetus = 'Tervise burger';
    public $sai = ' teravilja leib';
    public $lisand5 = ' Sinihallitus juust';
    public $lisand6 = ' sinepi kaste';
    public $lisand5Hind = 0.35;
    public $lisand6Hind = 0.40;


    public function TervislikuBurgeriSumma(){
        return
            $this -> lisand5Hind +
            $this -> lisand6Hind +
            parent::BurgerSumma();
    }
    public function MidaTeTellisite(){

        return  'Te tellisite: '.           $this -> nimetus.
            '<br> milles on lihaks: ' .     $this -> liha.
            '<br> milles on saiaks: ' .     $this -> sai.
            '<br> milles on lisand 1:' .    $this -> lisand1.
            '<br> milles on lisand 2:' .    $this -> lisand2.
            '<br> milles on lisand 3:' .    $this -> lisand3.
            '<br> milles on lisand 4:' .    $this -> lisand4.
            '<br> milles on lisand 5:' .    $this -> lisand5.
            '<br> milles on lisand 6: ' .   $this -> lisand6.
            '<br><br> See maksis teile:'.   $this -> TervislikuBurgeriSumma()
            ;
    }
}

class LuxBurger extends Burger{

    public $nimetus = 'Grill burgeri koos coca ja friikatega';
    public $jook = 'Coca cola';
    public $friikartulid = 'Friikartulid';
    public $joogiHind = 1.2;
    public $friikartulidHind = 1.8;

    function LuxBurgeriSumma(){

        return
            $this -> joogiHind +
            $this -> friikartulidHind +
            parent::BurgerSumma();
    }
     public function MidaTeTellisite(){

        return  'Te tellisite: '.           $this -> nimetus.
                '<br> milles on lihaks: ' .     $this -> liha.
                '<br> milles on saiaks: ' .     $this -> sai.
                '<br> milles on lisand 1:' .    $this -> lisand1.
                '<br> milles on lisand 2:' .    $this -> lisand2.
                '<br> milles on lisand 3:' .    $this -> lisand3.
                '<br> milles on lisand 4:' .    $this -> lisand4.
                '<br> millega on kaasa jook: '. $this -> jook. ' hinnaga ' . $this ->jook.
                '<br> ja kõrvale: '  .          $this -> friikartulid.  ' hinnaga ' . $this ->friikartulid.
                '<br><br> See maksis teile:'.   $this -> LuxBurgeriSumma()
                ;
    }

}


$burger = new Burger();
$rapane = new Burger();
// Siin katsetan kuidas burgerit muuta

$rapane -> nimetus = 'Kahe kihiline';
$rapane -> liha = 'kana pihv';
$rapane -> lisand1 = 'Salat';
$rapane -> lisand1Hind = '0.30';
$rapane -> lisand2 = 'Burgeri kaste';
$rapane -> lisand2Hind = '0.50';
$rapane -> lisand3 = 'küüslauk';
$rapane -> lisand3Hind = '0.10';
$rapane -> lisand4 = 'kahvel';



$tervislikBurger = new TervislikBurger();
$luxBurger = new LuxBurger();

echo '<h3>Normaalne burger</h3><br><br>';
echo $burger -> MidaTeTellisite();
echo '<br><br><h3>Eritellimus</h3>';
echo $rapane ->MidaTeTellisite();

echo '<hr>';
echo '<h3>Tervislik burger</h3>';
echo $tervislikBurger -> MidaTeTellisite();
echo '<hr>';
echo '<h3>Lux burger<h3></h3>';
echo $luxBurger -> MidaTeTellisite();