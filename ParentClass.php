<?php
	// This is the file for the parent class

	class ParentClass {

		protected $count;

		function __construct($count)
		{
			$this->count = $count;
		}

		public function get_count()
		{
			return $this->count;
		}

		public function addOne()
		{
			$this->count = $this->count + 1;
		}

		public function minusOne()
		{
			$this->count = $this->count - 1;
		}

		public function clear()
		{
			$this->count = 0;
		}

		function __toString()
		{
			return "<div class=wrapper><div class=container><p>" . $this->count . "</p></div></div>";
		}
	}
