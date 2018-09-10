<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CreateTpsAPIRequest;
use App\Http\Requests\Api\UpdateTpsAPIRequest;
use App\Models\Tps;
use App\Repositories\TpsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use App\Criteria\AppRequestCriteria;
use Response;

/**
 * Class TpsController
 * @package App\Http\Controllers\Api
 */
class TpsAPIController extends AppBaseController
{
	/** @var  TpsRepository */
	private $tpsRepository;

	public function __construct(TpsRepository $tpsRepo)
	{
		$this->tpsRepository = $tpsRepo;
	}

	/**
	 * @param Request $request
	 *
	 * @return Response
	 *
	 * @SWG\Get(
	 *      path="/tps",
	 *      summary="Get a listing of the Tps.",
	 *      tags={"Tps"},
	 *      description="Get all Tps",
	 *      produces={"application/json"},
	 *      security = {{"JWTBearer":{}}},
	 *      @SWG\Parameter(ref="#/parameters/RepoSearch"),
	 *      @SWG\Parameter(ref="#/parameters/RepoSearchFields"),
	 *      @SWG\Parameter(ref="#/parameters/RepoFilter"),
	 *      @SWG\Parameter(ref="#/parameters/RepoOrderBy"),
	 *      @SWG\Parameter(ref="#/parameters/RepoSortedBy"),
	 *      @SWG\Parameter(ref="#/parameters/RepoLimit"),
	 *      @SWG\Parameter(ref="#/parameters/RepoOffset"),
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
	 *                  @SWG\Items(ref="#/definitions/Tps")
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
		$this->tpsRepository->pushCriteria(new AppRequestCriteria($request));
		$this->tpsRepository->pushCriteria(new LimitOffsetCriteria($request));
		$tps = $this->tpsRepository->all();

		return $this->sendResponse($tps->toArray(), 'Tps retrieved successfully');
	}

	public function store(CreateTpsAPIRequest $request)
	{
		return $this->sendError('Not found');
	}

	/**
	 * @param int $id
	 *
	 * @return Response
	 *
	 * @SWG\Get(
	 *      path="/tps/{id}",
	 *      summary="Display the specified Tps",
	 *      tags={"Tps"},
	 *      description="Get Tps",
	 *      produces={"application/json"},
	 *      security = {{"JWTBearer":{}}},
	 *      @SWG\Parameter(
	 *          name="id",
	 *          description="id of Tps",
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
	 *                  ref="#/definitions/Tps"
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
		/** @var Tps $tps */
		$tps = $this->tpsRepository->findWithoutFail($id);

		if (empty($tps)) {
			return $this->sendError('Tps not found');
		}

		return $this->sendResponse($tps->toArray(), 'Tps retrieved successfully');
	}

	public function update($id, UpdateTpsAPIRequest $request)
	{
		return $this->sendError('Not found');
	}

	public function destroy($id)
	{
		return $this->sendError('Not found');
	}
}
