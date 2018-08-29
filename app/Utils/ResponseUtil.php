<?php

namespace App\Utils;

use InfyOm\Generator\Utils\ResponseUtil as BaseResponseUtil;

class ResponseUtil extends BaseResponseUtil
{
	/**
	 * @param string $message
	 * @param mixed $data
	 *
	 * @param bool $showCount
	 *
	 * @return array
	 */
	public static function makeResponse($message, $data, $showCount = false)
	{
		$response = [
			'success' => true,
			'data'    => $data,
			'message' => $message,
		];

		if ($showCount && is_array($data) && esks_is_multi_array($data)) {
			$response = array_merge(['count' => count($data)], $response);
		}

		return $response;
	}
}
