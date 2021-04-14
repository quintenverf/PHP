<?php
    $cars = array(
      'Mini' => array(
          'type' => 'Mini Cooper s',
          'prijs' => '5.950',
          'bouwjaar' => 2003,
          'vermogen' => '163 pk',
      ),
        'Audi' => array(
            'type' => 'Audi TT',
            'prijs' => '5.650',
            'bouwjaar' => 2000,
            'vermogen' => '179 pk',
        ),
    );
    echo '<pre>';
    print_r($cars);
    echo '<pre>';

    echo '<p>' . $cars['Mini']['type'] . '<p>';

    $a = 9 > 5;
    $b = 10 != 10;
    $c = $a || $b;
    $d = $a && $b;
    $e = $b || $c;
    $f = $a && $d;

    $logic = array($a,$b,$c,$d,$e,$f);

echo '<pre>';
print_r($logic);
var_dump($logic);
echo '<pre>';

if( $a > $b ) {
    echo '$a is greater than $b';
} else if( $b > $a ) {
    echo 'b is greater then a';
}else {
    echo 'a and b appers to be equal';
}