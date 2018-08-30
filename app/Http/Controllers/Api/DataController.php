<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class DataController extends Controller
{

	/**
	 * @param Request $request
	 *
	 * @return \Illuminate\Http\JsonResponse
	 * @SWG\Get(
	 *      path="/open",
	 *      summary="Test to see open data",
	 *      tags={"Test"},
	 *      description="Test to see open data, everyone can see the returned data",
	 *      produces={"application/json"},
	 *      @SWG\Response(
	 *          response=200,
	 *          description="successful operation",
	 *          @SWG\Schema(
	 *              type="object",
	 *              @SWG\Property(
	 *                  property="message",
	 *                  type="string",
	 *                  example="This data is open and can be accessed without the client being authenticated"
	 *              ),
	 *          )
	 *      )
	 * )
	 */
	public function open(Request $request)
	{
		$data = "This data is open and can be accessed without the client being authenticated";

		return response()->json(compact('data'), 200);

	}

	/**
	 * @param Request $request
	 *
	 * @return \Illuminate\Http\JsonResponse
	 * @SWG\Get(
	 *      path="/closed",
	 *      summary="Test Auth to see closed data",
	 *      tags={"Test"},
	 *      description="Test Auth to see closed data, only authorized users can see the returned data",
	 *      produces={"application/json"},
	 *      security = {{"JWTBearer":{}}},
	 *      @SWG\Response(
	 *          response=200,
	 *          description="successful operation",
	 *          @SWG\Schema(
	 *              type="object",
	 *              @SWG\Property(
	 *                  property="message",
	 *                  type="string",
	 *                  example="Only authorized users can see this"
	 *              ),
	 *          )
	 *      )
	 * )
	 */
	public function closed(Request $request)
	{
		$data = "Only authorized users can see this";

		return response()->json(compact('data'), 200);
	}
}
