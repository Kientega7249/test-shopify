<?php
	
	if (!function_exists('formatPrice')) {
		function formatPrice($event)
		{
			if ($event->isFormatPrice()) {
				return "<strong>Gratuit</strong";
				# code...
			}
			else
				return  sprintf("%.3f franc CFA ", $event->prix);
		}
		# code...
	}


	if (!function_exists('formatDate')) {
		function formatDate($date)
		{
			return $date->format('d/m/Y ');
		}
		# code...
	}






?>