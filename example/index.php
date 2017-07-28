<?php
/**
 * Created by viktor.
 * E-mail: vik.melnikov@gmail.com
 * GitHub: Viktor-Melnikov
 * Date: 28.07.17
 */

use Kladr\Kladr;
use Kladr\ObjectType;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


require __DIR__.'/../vendor/autoload.php';

$search = ( new Kladr() )->find( 'мос' )->type( ObjectType::Region );

$search = $search->options( [
                                'limit' => 15,
                                //'WithParent' => true
                            ] )->get();

echo '<pre>';
print_r( $search );
echo '</pre>';
exit;