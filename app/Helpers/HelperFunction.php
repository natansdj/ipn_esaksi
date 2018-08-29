<?php
if ( ! function_exists('esks_is_multi_array')) {
	function esks_is_multi_array($arr)
	{
		rsort($arr);

		return isset($arr[0]) && is_array($arr[0]);
	}
}