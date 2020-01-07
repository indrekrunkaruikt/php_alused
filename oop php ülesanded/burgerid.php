<?php


class Burger{

    public $nimetus = 'Argiburger';
    public $liha = 'Veiseliha';
    public $sai = 'Valge sai';
    public $hind = 1;
    public $lisand1 = 'tomat';
    public $lisand1Hind = 0.40;
    public $lisand2 = 'hapukurk';
    public $lisand2Hind = 0.30;
    public $lisand3 = 'redis';
    public $lisand3Hind = 0.40;
    public $lisand4 = 'muna';
    public $lisand4Hind = 0.15;



    public function BurgerSumma(){
        return
                $this -> hind +
                $this -> lisand1Hind +
                $this -> lisand2Hind +
                $this -> lisand3Hind +
                $this -> lisand4Hind ;

    }

    public function MidaTeTellisite(){

        return  'Te tellisite: '.               $this -> nimetus.
                '<br> milles on lihaks: ' .     $this -> liha.
                '<br> milles on saiaks: ' .     $this -> sai.
                '<br> milles on lisand 1:' .    $this -> lisand1.
                '<br> milles on lisand 2:' .    $this -> lisand2.
                '<br> milles on lisand 3:' .    $this -> lisand3.
                '<br> milles on lisand 4:' .    $this -> lisand4
            ;
    }
}

// eri omadustega burger
    $kahekihine -> nimetus = 'Kahe kihiline';
    $kahekihine -> lisand1 = 'Salat';
    $kahekihine -> lisand1Hind = '0.30';
    $kahekihine -> lisand2 = 'ketðup';
    $kahekihine -> lisand2Hind = '0.50';
    $kahekihine -> lisand3 = 'kapsas';
    $kahekihine -> lisand3Hind = '0.30';
    $kahekihine -> lisand4 = 'tomat';
    $kahekihine -> lisand4Hind = '0.35';

//tervislik burger


class TervislikBurger extends Burger{
    public $nimetus = 'Vegani eri';
    public  $liha = 'Ananass';
    public $sai = 'must leib';
    public $tervislikLisand1 = 'Feta juust';
    public $tervislikLisand1Hind = 0.50;
    public $tervislikLisand2 = 'Kartuli liistud';
    public $tervislikLisand2Hind = 1;
    public $lisand4 = 'tofu';
    public $lisand4Hind = 2;

    public function BurgerSumma(){
        return

            $this -> hind +
            $this -> lisand1Hind +
            $this -> lisand2Hind +
            $this -> lisand3Hind +
            $this -> lisand4Hind +
            $this -> tervislikLisand1Hind +
            $this -> tervislikLisand2Hind;

    }
    public function MidaTeTellisite(){
        return  'Te tellisite: '.               $this -> nimetus.
                '<br> milles on lihaks: ' .     $this -> liha.
                '<br> milles on saiaks: ' .     $this -> sai.
                '<br> milles on lisand 1:' .    $this -> lisand1.
                '<br> milles on lisand 2:' .    $this -> lisand2.
                '<br> milles on lisand 3:' .    $this -> lisand3.
                '<br> milles on lisand 4:' .    $this -> lisand4.
                '<br> Milles on tervislik lisand 1::' . $this -> tervislikLisand1.
                '<br> Milles on tervislik lisand 2: ' . $this -> tervislikLisand2
                ;
    }

}

class LuxBurger extends burger{

    public $coca = 'coca cola';
    Public $cocaHind = 2;
    public $friikad = 'Friikartulid';
    public $friikateHind= 2;

    public function BurgerSumma()
    {
        return
        $this -> hind +
        $this -> lisand1Hind +
        $this -> lisand2Hind +
        $this -> lisand3Hind +
        $this -> lisand4Hind +
        $this -> cocaHind +
        $this -> friikateHind
        ;

    }

    public function MidaTeTellisite(){
        return  'Te tellisite: '.               $this -> nimetus.
            '<br> milles on lihaks: ' .     $this -> liha.
            '<br> milles on saiaks: ' .     $this -> sai.
            '<br> milles on lisand 1: ' .    $this -> lisand1.
            '<br> milles on lisand 2: ' .    $this -> lisand2.
            '<br> milles on lisand 3: ' .    $this -> lisand3.
            '<br> milles on lisand 4: ' .    $this -> lisand4.
            '<br> Millega kaasas on : ' .    $this -> coca.
            '<br> ja ' . $this -> friikad
            ;
    }
}


// anna burgeritele omadused



$argiBurger = new Burger();
echo '<h1> tava burger </h1>';
echo $argiBurger -> MidaTeTellisite();
echo '<br> See maksis:' . $argiBurger -> BurgerSumma() . ' Eurot.';

$kahekihine = new Burger();
echo '<br> <h1>spetsiaalsete omadusetega tava burger</h1>';
echo $kahekihine -> MidaTeTellisite();
echo '<br> Mis maksis: '. $kahekihine -> BurgerSumma();
echo '<hr>';

$tavaTervislikBurger = new TervislikBurger();
echo '<h1> Vegani burger</h1>';
echo $tavaTervislikBurger -> MidaTeTellisite();
echo '<br>';
echo 'See maksis: '. $tavaTervislikBurger -> BurgerSumma();
echo '<hr>';

$luxBurgerCocaJaFriikatega = new LuxBurger();
echo '<h1> Lux burger koos friikate ja cocaga</h1>';
echo $luxBurgerCocaJaFriikatega ->MidaTeTellisite();
echo '<br> See maksis: ' . $luxBurgerCocaJaFriikatega ->BurgerSumma();
echo '<hr>';


$tellimus = $_POST(['lisand1']);

$tellimusSaabus = 'Sinu burger on = ' . $tellimus;
echo $tellimusSaabus;

