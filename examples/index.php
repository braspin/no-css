<?php

include_once __DIR__ .'\../src/Braspin/Css.php';

use Braspin\NoCss\Css;
use Braspin\NoCss\Cascate;
use Braspin\NoCss\Attribute;

$cascate = new Cascate();
$cascate->tag('a', [
  Attribute::str('target', '=', '_blank')
]);

$css = new Css('./', 'style.css', true, -1);
$css->class('intro', [
  'background-color' => 'yellow'
]);
$css->cascate($cascate, [
  'background-color' => 'black'
]);

$css->echo();