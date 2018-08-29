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

	/**
	 * @param CreateTpsAPIRequest $request
	 *
	 * @return Response
	 *
	 * @SWG\Post(
	 *      path="/tps",
	 *      summary="Store a newly created Tps in storage",
	 *      tags={"Tps"},
	 *      description="Store Tps",
	 *      produces={"application/json"},
	 *      @SWG\Parameter(
	 *          name="body",
	 *          in="body",
	 *          description="Tps that should be stored",
	 *          required=false,
	 *          @SWG\Schema(ref="#/definitions/Tps")
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
	public function store(CreateTpsAPIRequest $request)
	{
		$input = $request->all();

		$tps = $this->tpsRepository->create($input);

		return $this->sendResponse($tps->toArray(), 'Tps saved successfully');
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

	/**
	 * @param int $id
	 * @param UpdateTpsAPIRequest $request
	 *
	 * @return Response
	 *
	 * @SWG\Put(
	 *      path="/tps/{id}",
	 *      summary="Update the specified Tps in storage",
	 *      tags={"Tps"},
	 *      description="Update Tps",
	 *      produces={"application/json"},
	 *      @SWG\Parameter(
	 *          name="id",
	 *          description="id of Tps",
	 *          type="integer",
	 *          required=true,
	 *          in="path"
	 *      ),
	 *      @SWG\Parameter(
	 *          name="body",
	 *          in="body",
	 *          description="Tps that should be updated",
	 *          required=false,
	 *          @SWG\Schema(ref="#/definitions/Tps")
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
	public function update($id, UpdateTpsAPIRequest $request)
	{
		$input = $request->all();

		/** @var Tps $tps */
		$tps = $this->tpsRepository->findWithoutFail($id);

		if (empty($tps)) {
			return $this->sendError('Tps not found');
		}

		$tps = $this->tpsRepository->update($input, $id);

		return $this->sendResponse($tps->toArray(), 'Tps updated successfully');
	}

	/**
	 * @param int $id
	 *
	 * @return Response
	 *
	 * @SWG\Delete(
	 *      path="/tps/{id}",
	 *      summary="Remove the specified Tps from storage",
	 *      tags={"Tps"},
	 *      description="Delete Tps",
	 *      produces={"application/json"},
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
	 *                  type="string"
	 *              ),
	 *              @SWG\Property(
	 *                  property="message",
	 *                  type="string"
	 *              )
	 *          )
	 *      )
	 * )
	 */
	public function destroy($id)
	{
		/** @var Tps $tps */
		$tps = $this->tpsRepository->findWithoutFail($id);

		if (empty($tps)) {
			return $this->sendError('Tps not found');
		}

		$tps->delete();

		return $this->sendResponse($id, 'Tps deleted successfully');
	}
}
