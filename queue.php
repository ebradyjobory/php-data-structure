<?php

class Queue {
	public $storage;
	public $enquePosition;
	public $dequeuePosition;

	public function __construct($storage = array(), $enquePosition = 0, $dequeuePosition = 0) {
      $this->storage = $storage;
      $this->enquePosition = $enquePosition;
      $this->dequeuePosition = $dequeuePosition;
	}

    public function size() {
       return $this->enquePosition - $this->dequeuePosition;
    }

    public function push($item) {
       array_push($this->storage, $item);
       $this->enquePosition++;
    }

    public function pop() {
    	array_pop($this->storage);
    	$this->dequeuePosition++;
    }
}

$newQueue = new Queue();
$newQueue->push(10);
$newQueue->push(40);
echo $newQueue->size();
$newQueue->pop();
echo $newQueue->size();


?>