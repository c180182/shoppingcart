<?php

class Book {
	private $name;
	private $writer;
	private $price;
	private $code;

	function __construct(string $name, string $writer, int $price, string $code) {
		$this->name = $name;
		$this->writer = $writer;
		$this->price = $price;
		$this->code = $code;
	}

	function setName(string $name):void {
		$this->name = $name;
	}
	function getName():string {
		return $this->name;
	}

	function setWrite(string $writer):void {
		$this->writer = $writer;
	}
	function getWrite():string {
		return $this->writer;
	}

	function setPrice(int $price):void {
		$this->price = $price;
	}
	function getPrice():string {
		return number_format($this->price);
	}
	
	function setCode(string $code):void {
		$this->code = $code;
	}
	function getCode():string {
		return $this->code;
	}
}

class Dvd {
	private $name;
	private $price;
	private $time;

	function __construct(string $name, int $price, int $time) {
		$this->name = $name;
		$this->price = $price;
		$this->time = $time;
	}

	function setName(string $name):void {
		$this->name = $name;
	}
	function getName():string {
		return $this->name;
	}

	function setPrice(int $price):void {
		$this->price = $price;
	}
	function getPrice():string {
		return number_format($this->price);
	}
	
	function setTime(int $time):void {
		$this->time = $time;
	}
	function getTime():string {
		return number_format($this->time);
	}
	
}
?>