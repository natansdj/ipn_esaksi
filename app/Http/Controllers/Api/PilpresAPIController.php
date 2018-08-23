<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CreatePilpresAPIRequest;
use App\Http\Requests\Api\UpdatePilpresAPIRequest;
use App\Models\Pilpres;
use App\Repositories\PilpresRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class PilpresController
 * @package App\Http\Controllers\Api
 */

class PilpresAPIController extends AppBaseController
{
    /** @var  PilpresRepository */
    private $pilpresRepository;

    public function __construct(PilpresRepository $pilpresRepo)
    {
        $this->pilpresRepository = $pilpresRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/pilpres",
     *      summary="Get a listing of the Pilpres.",
     *      tags={"Pilpres"},
     *      description="Get all Pilpres",
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
     *                  @SWG\Items(ref="#/definitions/Pilpres")
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
        $this->pilpresRepository->pushCriteria(new RequestCriteria($request));
        $this->pilpresRepository->pushCriteria(new LimitOffsetCriteria($request));
        $pilpres = $this->pilpresRepository->all();

        return $this->sendResponse($pilpres->toArray(), 'Pilpres retrieved successfully');
    }

    /**
     * @param CreatePilpresAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/pilpres",
     *      summary="Store a newly created Pilpres in storage",
     *      tags={"Pilpres"},
     *      description="Store Pilpres",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Pilpres that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Pilpres")
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
     *                  ref="#/definitions/Pilpres"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreatePilpresAPIRequest $request)
    {
        $input = $request->all();

        $pilpres = $this->pilpresRepository->create($input);

        return $this->sendResponse($pilpres->toArray(), 'Pilpres saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/pilpres/{id}",
     *      summary="Display the specified Pilpres",
     *      tags={"Pilpres"},
     *      description="Get Pilpres",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Pilpres",
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
     *                  ref="#/definitions/Pilpres"
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
        /** @var Pilpres $pilpres */
        $pilpres = $this->pilpresRepository->findWithoutFail($id);

        if (empty($pilpres)) {
            return $this->sendError('Pilpres not found');
        }

        return $this->sendResponse($pilpres->toArray(), 'Pilpres retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdatePilpresAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/pilpres/{id}",
     *      summary="Update the specified Pilpres in storage",
     *      tags={"Pilpres"},
     *      description="Update Pilpres",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Pilpres",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Pilpres that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Pilpres")
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
     *                  ref="#/definitions/Pilpres"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdatePilpresAPIRequest $request)
    {
        $input = $request->all();

        /** @var Pilpres $pilpres */
        $pilpres = $this->pilpresRepository->findWithoutFail($id);

        if (empty($pilpres)) {
            return $this->sendError('Pilpres not found');
        }

        $pilpres = $this->pilpresRepository->update($input, $id);

        return $this->sendResponse($pilpres->toArray(), 'Pilpres updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/pilpres/{id}",
     *      summary="Remove the specified Pilpres from storage",
     *      tags={"Pilpres"},
     *      description="Delete Pilpres",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Pilpres",
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
        /** @var Pilpres $pilpres */
        $pilpres = $this->pilpresRepository->findWithoutFail($id);

        if (empty($pilpres)) {
            return $this->sendError('Pilpres not found');
        }

        $pilpres->delete();

        return $this->sendResponse($id, 'Pilpres deleted successfully');
    }
}
