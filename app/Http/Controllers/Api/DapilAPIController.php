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
     * @return Response
     *
     * @SWG\Get(
     *      path="/dapils",
     *      summary="Get a listing of the Dapils.",
     *      tags={"Dapil"},
     *      description="Get all Dapils",
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

    /**
     * @param CreateDapilAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/dapils",
     *      summary="Store a newly created Dapil in storage",
     *      tags={"Dapil"},
     *      description="Store Dapil",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Dapil that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Dapil")
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
    public function store(CreateDapilAPIRequest $request)
    {
        $input = $request->all();

        $dapils = $this->dapilRepository->create($input);

        return $this->sendResponse($dapils->toArray(), 'Dapil saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/dapils/{id}",
     *      summary="Display the specified Dapil",
     *      tags={"Dapil"},
     *      description="Get Dapil",
     *      produces={"application/json"},
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

    /**
     * @param int $id
     * @param UpdateDapilAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/dapils/{id}",
     *      summary="Update the specified Dapil in storage",
     *      tags={"Dapil"},
     *      description="Update Dapil",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Dapil",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Dapil that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Dapil")
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
    public function update($id, UpdateDapilAPIRequest $request)
    {
        $input = $request->all();

        /** @var Dapil $dapil */
        $dapil = $this->dapilRepository->findWithoutFail($id);

        if (empty($dapil)) {
            return $this->sendError('Dapil not found');
        }

        $dapil = $this->dapilRepository->update($input, $id);

        return $this->sendResponse($dapil->toArray(), 'Dapil updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/dapils/{id}",
     *      summary="Remove the specified Dapil from storage",
     *      tags={"Dapil"},
     *      description="Delete Dapil",
     *      produces={"application/json"},
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
        /** @var Dapil $dapil */
        $dapil = $this->dapilRepository->findWithoutFail($id);

        if (empty($dapil)) {
            return $this->sendError('Dapil not found');
        }

        $dapil->delete();

        return $this->sendResponse($id, 'Dapil deleted successfully');
    }
}
