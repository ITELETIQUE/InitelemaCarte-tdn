<?php 

if (! function_exists('page_title')) {
	function page_title($title)
	{
		$baseTitle = config('app.name').' - List of artisans';

		if ($title === '') {
			return $baseTitle;
		}else{
			return $title .' | '. $baseTitle;
		}
	}
}

if (! function_exists('set_active_route')) {
	function set_active_route($route)
	{
		return Route::is($route) ? 'active' : '';
	}
}


 if(! function_exists('format_date')){
     function format_date($date){
          return $date->format('d/m/Y H:i');
     }

 }

 if (! function_exists('set_flash')) {
       function set_flash($message, $type)
       {
         session()->flash('notification.message', $message);
         session()->flash('notification.type', $type);
       }
 }

 ?>