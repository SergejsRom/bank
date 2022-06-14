<?php
use Meska\lokys\Vaikas as V; // naudoti pavadinima is klases NAMESPACE, PRIDEDANT as V, galima sutrumpinti, sugalvoti savo

echo '<pre>';
/*
/*php AUTOLOADER
spl_autoload_register(function ($class) {
    echo '<h3>Reikia 1: ',$class.'</h3>';
    require __DIR__. '/'.$class.'.php';
});
php AUTOLOADER*/



//require __DIR__. '/Stikline.php';

//require __DIR__. '/Cart.php';
require __DIR__. '/Senelis.php';
require __DIR__. '/Tevas.php';
require __DIR__. '/Vaikas.php';

$v1 = new V;
$v2 = new V;
$v3 = new V;

$v1->betvarke();
//$v->tvarka();
//$v->pasaka();

//$sen = new Senelis;
echo '<br>';

echo '<br>';
//$sen->pasaka();


//$c1 = Cart::create();
//$c2 = Cart::create();
//$c3 = Cart::create();

//echo serialize($c1);

/*echo '<br>';

//echo json_encode($c1);

echo '<br>';

//echo Cart::BAD;
echo '<br>';

//$c4 = clone($c1);

//var_dump ($c1);
//var_dump ($c2);
var_dump ($c3);

die;

$s1 = new Stikline;
$s2 = new Stikline;
$s3 = new Stikline;

echo '<pre>';

print_r ($s1);
print_r ($s2);
print_r ($s3);

echo '<br>';

echo Stikline::$gerimas = 'Fanta';

Stikline::valio(); // stationio kodo paleidimas
$s2->kas();
$s3->kas(); */
