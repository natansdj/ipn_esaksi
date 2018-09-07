<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CreateDapilAPIRequest;
use App\Http\Requests\Api\UpdateDapilAPIRequest;
use App\Models\Dapil;
use App\Repositories\DapilRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use App\Criteria\AppRequestCriteria;
use Response;

/**
 * Class DapilController
 * @package App\Http\Controllers\Api
 */
class DapilAPIController extends AppBaseController
{
	/** @var  DapilRepository */
	private $dapilRepository;

	public function __construct(DapilRepository $dapilRepo)
	{
		$this->dapilRepository = $dapilRepo;
	}

	/**
	 * @param Request $request
	 *
	 * @return Response
	 *
	 * @SWG\Get(
	 *      path="/dapils",
	 *      summary="Get a listing of the Dapils.",
	 *      tags={"Dapil"},
	 *      description="Get all Dapils",
	 *      produces={"application/json"},
	 *      security = {{"JWTBearer":{}}},
	 *      @SWG\Response(
	 *          response=200,
	 *          description="successful operation",
	 *          @SWG\Schema(
	 *              type="object",
	 *              @SWG\Property(
	 *                  property="success",
	 *                  type="boolean"
	 *              ),
	 *              @SWG\Property(
	 *                  property="data",
	 *                  type="array",
	 *                  @SWG\Items(ref="#/definitions/Dapil")
	 *              ),
	 *              @SWG\Property(
	 *                  property="message",
	 *                  type="string"
	 *              )
	 *          )
	 *      )
	 * )
	 */
	public function index(Request $request)
	{
		$this->dapilRepository->pushCriteria(new AppRequestCriteria($request));
		$this->dapilRepository->pushCriteria(new LimitOffsetCriteria($request));
		$dapils = $this->dapilRepository->all();

		return $this->sendResponse($dapils->toArray(), 'Dapils retrieved successfully');
	}

	public function store(CreateDapilAPIRequest $request)
	{
		return $this->sendError('Not found');
	}

	/**
	 * @param int $id
	 *
	 * @return Response
	 *
	 * @SWG\Get(
	 *      path="/dapils/{id}",
	 *      summary="Display the specified Dapil",
	 *      tags={"Dapil"},
	 *      description="Get Dapil",
	 *      produces={"application/json"},
	 *      security = {{"JWTBearer":{}}},
	 *      @SWG\Parameter(
	 *          name="id",
	 *          description="id of Dapil",
	 *          type="integer",
	 *          required=true,
	 *          in="path"
	 *      ),
	 *      @SWG\Response(
	 *          response=200,
	 *          description="successful operation",
	 *          @SWG\Schema(
	 *              type="object",
	 *              @SWG\Property(
	 *                  property="success",
	 *                  type="boolean"
	 *              ),
	 *              @SWG\Property(
	 *                  property="data",
	 *                  ref="#/definitions/Dapil"
	 *              ),
	 *              @SWG\Property(
	 *                  property="message",
	 *                  type="string"
	 *              )
	 *          )
	 *      )
	 * )
	 */
	public function show($id)
	{
		/** @var Dapil $dapil */
		$dapil = $this->dapilRepository->findWithoutFail($id);

		if (empty($dapil)) {
			return $this->sendError('Dapil not found');
		}

		return $this->sendResponse($dapil->toArray(), 'Dapil retrieved successfully');
	}

	public function update($id, UpdateDapilAPIRequest $request)
	{
		return $this->sendError('Not found');
	}

	public function destroy($id)
	{
		return $this->sendError('Not found');
	}
}
