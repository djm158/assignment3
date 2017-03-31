<?php
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {

		protected $count;

		function __construct($count)
		{
			parent::__construct($count);
		}

		public function square()
		{
			$this->count = $this->count * $this->count;
		}

		public function root()
		{
			$this->count = round(sqrt($this->count));
		}

		public function addOne()
		{
			parent::addOne();
		}

		public function minusOne()
		{
			parent::minusOne();
		}

		public function clear()
		{
			parent::clear();
		}

		function __toString()
		{
			return parent::__toString();
		}

	}
