<?php

require 'vendor/autoload.php';

/**
 * 
 */

use Intervention\Image\ImageManager;
new Intervention\Image\Drivers\Gd\Driver;

// create image manager with desired driver
$manager = new ImageManager(new Intervention\Image\Drivers\Gd\Driver());

$imagen_original = 'imagenes/el-gran-dictador.jpg';
$imagen_resultado = 'imagenes/el-gran-dictadorPeq.jpg';

try{
    $image = $manager->read($imagen_original);
    $image->resize(300, 300, function($constraint) {
        $constraint->aspectRatio();
        $constraint->upsize();
    });
    $image->save($imagen_resultado);
    echo 'Imagen procesada con éxito';
}catch(Exception $e){
    echo 'Error al procesar imagen';
}
echo "<img src='$imagen_resultado' alt='Imagen pequeña'>";
