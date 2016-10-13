<?php
  class Fractions {
    public $firstPart = 0;
    public $lastPart  = 0;

    public function __construct($number)
    {
      if(!is_numeric($number)) die('not number');

      $tmp = (string) $number;
      $tmp = explode('.', $tmp);

      $this->firstPart = (int) $tmp[0];
      $this->lastPart  = (int) $tmp[1];
    }

    public function main()
    {
      echo $this->firstPart . ' + ' . $this->lastPart . ' = ' . $this->add() . '<br>';
      echo $this->firstPart . ' - ' . $this->lastPart . ' = ' . $this->subtraction() . '<br>';
      echo $this->firstPart . ' * ' . $this->lastPart . ' = ' . $this->multiple() . '<br>';
      echo 'Comparing: ' . $this->compare() . '<br>';
    }

    public function add()
    {
      return $this->firstPart + $this->lastPart;
    }

    public function subtraction()
    {
      return $this->firstPart - $this->lastPart;
    }

    public function multiple()
    {
      return $this->firstPart * $this->lastPart;
    }

    public function compare()
    {

      if ($this->firstPart > $this->lastPart) {
        $result = $this->firstPart . " > " .$this->lastPart ;
      }
      elseif ($this->firstPart == $this->lastPart) {
        $result = $this->firstPart . " = " . $this->lastPart;
      }
      else {
        $result = $this->firstPart . " < " . $this->lastPart;
      }

      return $result;
    }
  }

  $class = new Fractions(-3.3);
  $class->main();
 ?>
