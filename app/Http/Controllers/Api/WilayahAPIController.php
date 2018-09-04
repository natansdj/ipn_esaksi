<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CreateWilayahAPIRequest;
use App\Http\Requests\Api\UpdateWilayahAPIRequest;
use App\Models\Wilayah;
use App\Repositories\WilayahRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use App\Criteria\AppRequestCriteria;
use Response;

/**
 * Class WilayahController
 * @package App\Http\Controllers\Api
 */

class WilayahAPIController extends AppBaseController
{
    /** @var  WilayahRepository */
    private $wilayahRepository;

    public function __construct(WilayahRepository $wilayahRepo)
    {
        $this->wilayahRepository = $wilayahRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/wilayahs",
     *      summary="Get a listing of the Wilayahs.",
     *      tags={"Wilayah"},
     *      description="Get all Wilayahs",
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
     *                  @SWG\Items(ref="#/definitions/Wilayah")
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
        $this->wilayahRepository->pushCriteria(new AppRequestCriteria($request));
        $this->wilayahRepository->pushCriteria(new LimitOffsetCriteria($request));
        $wilayahs = $this->wilayahRepository->all();

        return $this->sendResponse($wilayahs->toArray(), 'Wilayahs retrieved successfully');
    }

    /**
     * @param CreateWilayahAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/wilayahs",
     *      summary="Store a newly created Wilayah in storage",
     *      tags={"Wilayah"},
     *      description="Store Wilayah",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Wilayah that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Wilayah")
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
     *                  ref="#/definitions/Wilayah"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateWilayahAPIRequest $request)
    {
        $input = $request->all();

        $wilayahs = $this->wilayahRepository->create($input);

        return $this->sendResponse($wilayahs->toArray(), 'Wilayah saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/wilayahs/{id}",
     *      summary="Display the specified Wilayah",
     *      tags={"Wilayah"},
     *      description="Get Wilayah",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Wilayah",
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
     *                  ref="#/definitions/Wilayah"
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
        /** @var Wilayah $wilayah */
        $wilayah = $this->wilayahRepository->findWithoutFail($id);

        if (empty($wilayah)) {
            return $this->sendError('Wilayah not found');
        }

        return $this->sendResponse($wilayah->toArray(), 'Wilayah retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateWilayahAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/wilayahs/{id}",
     *      summary="Update the specified Wilayah in storage",
     *      tags={"Wilayah"},
     *      description="Update Wilayah",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Wilayah",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Wilayah that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Wilayah")
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
     *                  ref="#/definitions/Wilayah"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateWilayahAPIRequest $request)
    {
        $input = $request->all();

        /** @var Wilayah $wilayah */
        $wilayah = $this->wilayahRepository->findWithoutFail($id);

        if (empty($wilayah)) {
            return $this->sendError('Wilayah not found');
        }

        $wilayah = $this->wilayahRepository->update($input, $id);

        return $this->sendResponse($wilayah->toArray(), 'Wilayah updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/wilayahs/{id}",
     *      summary="Remove the specified Wilayah from storage",
     *      tags={"Wilayah"},
     *      description="Delete Wilayah",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Wilayah",
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
        /** @var Wilayah $wilayah */
        $wilayah = $this->wilayahRepository->findWithoutFail($id);

        if (empty($wilayah)) {
            return $this->sendError('Wilayah not found');
        }

        $wilayah->delete();

        return $this->sendResponse($id, 'Wilayah deleted successfully');
    }
}
