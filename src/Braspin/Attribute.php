<?php namespace Braspin\NoCss;

class Attribute 
{
  public static function str(string $name, string $operator, string $value) : string
  {
    return $name . $operator . '"' . $value . '"';
  }
}