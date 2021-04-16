<?php
	namespace App\Utilities;

	/**
	 * 
	 */
	class Date 
	{
		
		public function iseWeekend()
		{
			return date('N')>=6;
			# code...
		}
	}

?>