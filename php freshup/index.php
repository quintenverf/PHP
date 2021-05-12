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
    // ternary operations
// long version
$is_logged_in = true;
if ($is_logged_in) {
    $message = "welcome back!";
} else {
    $message = "intruder!!";
}

// short version
$message = $is_logged_in ? "welcome back!" : "intruder!!";

// even shorter version for writing one thing
echo "welcome " . ($is_logged_in ? " back!" : "!");

echo '<pre>';
echo $message;
echo '<pre>';


 // so what this basically tells you is the following:
// name gets, if name is already set then display name and if not than display 'joe';
$name = isset( $name ) ? $name : 'joe';

// the shorter version is the elvis operator
// and tells you 'if name is null then display joe'
$name = null;
$name = $name ?: 'joe';
echo $name;

//SWITCH STATEMENTS
//switches with cases and echo's
$total = 1;
switch ($total) {
    case 1:
        echo '<p>$total is 1</p>';
        break;
    case 2:
        echo '<p>$total is 2</p>';
        break;
    case 3:
        echo '<p>$total is 3</p>';
        break;
    default:
        echo '<p>$total is more than 3</p>';
}

//simplifying the switch statement by putting it together
switch ($total){
    case 1:
    case 2:
    case 3:
    case 4:
        echo '<p>$total is less than 5</p>';
        break;
    default:
        echo '<p>$total is above 5</p>';
}

//figuring out even/odd with modulus
$a = 5;
if ($a % 2 == 0) {
    echo "<p>$a is even.</p>";
} else {
    echo "<p>$a is odd.</p>";
}

$a = 15;
$b = 5;

echo ($a % $b == 0) ? "<p>$b is a factor of $a</p>" : "<p>$b is not a factor of $a</p>";

echo -$a % 2;

//challange

$q = (14 + 82 - 32 / 2)** 2;
$w = 18 * (3 / 6 - 9) * 10;
$e = 5 * ((12 / 2) - (8 * 4) + (12 * 6));


$output = array($q, $w, $e);

echo '<pre>';
print_r($output);
var_dump($output);
echo '<pre>';

echo '<pre>';
echo 3**2+5*2;
echo '<pre>';

//fibonachii

$current = 1;
$previous = 0;
$next = null;
$limit = 200;
$sequence = '';

while( $current < $limit ){
    $sequence.= $current . ', ';
    $next = $current + $previous;
    $previous = $current;
    $current = $next;
}

$sequence = trim($sequence);
$sequence = substr($sequence, 0, strlen($sequence)-1);
echo $sequence;



