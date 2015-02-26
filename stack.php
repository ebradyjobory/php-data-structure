<?php

class Stack {
   
    public $storage;
    public $size;


	public function __construct($storage = array(), $size = 0) {
		$this->size = $size;
		$this->storage = $storage;
	}


	public function push($item){
		array_push($this->storage, $item);
		$this->size++;
	}

	public function pop() {
		array_pop($this->storage);
		$this->size--;
	}

	public function size() {
		echo $this->size;
	}
}

$newStack = new Stack();
$newStack->push(10);
$newStack->push(20);
echo $newStack->size;
$newStack->pop();

echo $newStack->size;

$newStack->size();


?>