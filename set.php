<?php
class Set {

  public function __construct($storage = array()) {
    $this->storage = $storage;
  }

  public function add($item) {
    array_push($this->storage, $item);
  }

  public function remove($item) {
    if (in_array($item, $this->storage)) {
      for ($i = 0; $i < count($this->storage); $i++) {
        if ($this->storage[$i] === $item) {
          $value = $this->storage[$i];
          unset($this->storage[$i]);
        }
      }
    }
    echo $value;
  }

  public function contains($item) {
    if (in_array($item, $this->storage)) {
      echo 'true';
    } else {
      echo 'false';
    }
  }
  
}


$newSet = new Set();

$newSet->add(10);
$newSet->add(20);


$newSet->contains(10); // true
$newSet->contains(20); // true
$newSet->contains(30); // false

$newSet->remove(10);
$newSet->remove(20);

$newSet->contains(10);
$newSet->contains(20);
$newSet->contains(30);

?>