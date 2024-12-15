<?php

require '../vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make('car.jpg');

$img->resize(300, null, function (\Intervention\Image\Constraint $constraint) {
    $constraint->aspectRatio();
});

$img->text('Toyota Gaia', $img->getWidth(), $img->getHeight(), function (\Intervention\Image\AbstractFont $font) {
    $font->size(14);
    $font->color([255,255,255,0.3]);
    $font->align('center');
    $font->valign('bottom');
});

$img->save('test.jpg');

echo $img->encode('jpg');
