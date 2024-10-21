<?php namespace Braspin\NoCss;

class Cascate 
{
  private $content = '';
  public function __construct() {
  }

  public function class(string $name, bool $space = false) : Cascate
  {
    $this->content .= '.' . $name . ($space ?? ' ');
    return $this;
  }

  public function id(string $name, bool $space = false) : Cascate
  {
    $this->content .= '#' .$name . ($space ?? ' ');
    return $this;
  }

  public function tag(string $name, array $attrs = [], bool $space = false) : Cascate
  {
    $this->content .= $name;

    foreach($attrs as $attr)
    {
      $this->content .= '[' . $attr . ']';
    }

    $this->content .= ($space ?? ' ');

    return $this;
  }

  public function child(string $name, bool $space = false) : Cascate
  {
    $this->content .= ' > ' . $name . ($space ?? ' ');
    return $this;
  }

  public function pseudo_class(string $name, bool $space = false) : Cascate
  {
    $this->content .= ':' . $name . ($space ?? ' ');
    return $this;
  }

  public function pseudo_elements(string $name, bool $space = false) : Cascate
  {
    $this->content .= '::' . $name . ($space ?? ' ');
    return $this;
  }

  public function conditional(string $name, string $operator, string $value) : Cascate
  {
    $this->content .= ' (' . $name . ' ' . $operator . ' ' . $value . ') ';
    return $this;
  }

  public function render() : string
  {
    return $this->content;
  }
}