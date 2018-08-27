<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CreatePilegAPIRequest;
use App\Http\Requests\Api\UpdatePilegAPIRequest;
use App\Models\Pileg;
use App\Repositories\PilegRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use App\Criteria\AppRequestCriteria;
use Response;

/**
 * Class PilegController
 * @package App\Http\Controllers\Api
 */

class PilegAPIController extends AppBaseController
{
    /** @var  PilegRepository */
    private $pilegRepository;

    public function __construct(PilegRepository $pilegRepo)
    {
        $this->pilegRepository = $pilegRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/pilegs",
     *      summary="Get a listing of the Pilegs.",
     *      tags={"Pileg"},
     *      description="Get all Pilegs",
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
     *                  @SWG\Items(ref="#/definitions/Pileg")
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
        $this->pilegRepository->pushCriteria(new AppRequestCriteria($request));
        $this->pilegRepository->pushCriteria(new LimitOffsetCriteria($request));
        $pilegs = $this->pilegRepository->all();

        return $this->sendResponse($pilegs->toArray(), 'Pilegs retrieved successfully');
    }

    /**
     * @param CreatePilegAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/pilegs",
     *      summary="Store a newly created Pileg in storage",
     *      tags={"Pileg"},
     *      description="Store Pileg",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Pileg that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Pileg")
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
     *                  ref="#/definitions/Pileg"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreatePilegAPIRequest $request)
    {
        $input = $request->all();

        $pilegs = $this->pilegRepository->create($input);

        return $this->sendResponse($pilegs->toArray(), 'Pileg saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/pilegs/{id}",
     *      summary="Display the specified Pileg",
     *      tags={"Pileg"},
     *      description="Get Pileg",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Pileg",
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
     *                  ref="#/definitions/Pileg"
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
        /** @var Pileg $pileg */
        $pileg = $this->pilegRepository->findWithoutFail($id);

        if (empty($pileg)) {
            return $this->sendError('Pileg not found');
        }

        return $this->sendResponse($pileg->toArray(), 'Pileg retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdatePilegAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/pilegs/{id}",
     *      summary="Update the specified Pileg in storage",
     *      tags={"Pileg"},
     *      description="Update Pileg",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Pileg",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Pileg that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Pileg")
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
     *                  ref="#/definitions/Pileg"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdatePilegAPIRequest $request)
    {
        $input = $request->all();

        /** @var Pileg $pileg */
        $pileg = $this->pilegRepository->findWithoutFail($id);

        if (empty($pileg)) {
            return $this->sendError('Pileg not found');
        }

        $pileg = $this->pilegRepository->update($input, $id);

        return $this->sendResponse($pileg->toArray(), 'Pileg updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/pilegs/{id}",
     *      summary="Remove the specified Pileg from storage",
     *      tags={"Pileg"},
     *      description="Delete Pileg",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Pileg",
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
        /** @var Pileg $pileg */
        $pileg = $this->pilegRepository->findWithoutFail($id);

        if (empty($pileg)) {
            return $this->sendError('Pileg not found');
        }

        $pileg->delete();

        return $this->sendResponse($id, 'Pileg deleted successfully');
    }
}
