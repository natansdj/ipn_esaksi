<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CreateVoteAPIRequest;
use App\Http\Requests\Api\UpdateVoteAPIRequest;
use App\Models\Vote;
use App\Repositories\VoteRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use App\Criteria\AppRequestCriteria;
use Response;

/**
 * Class VoteController
 * @package App\Http\Controllers\Api
 */
class VoteAPIController extends AppBaseController
{
	/** @var  VoteRepository */
	private $voteRepository;

	public function __construct(VoteRepository $voteRepo)
	{
		$this->voteRepository = $voteRepo;
	}

	/**
	 * @param Request $request
	 *
	 * @return Response
	 *
	 * @SWG\Get(
	 *      path="/votes",
	 *      summary="Get a listing of the Votes.",
	 *      tags={"Vote"},
	 *      description="Get all Votes",
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
	 *                  @SWG\Items(ref="#/definitions/Vote")
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
		$this->voteRepository->pushCriteria(new AppRequestCriteria($request));
		$this->voteRepository->pushCriteria(new LimitOffsetCriteria($request));
		$votes = $this->voteRepository->all();

		return $this->sendResponse($votes->toArray(), 'Votes retrieved successfully');
	}

	/**
	 * @param CreateVoteAPIRequest $request
	 *
	 * @return Response
	 *
	 * @SWG\Post(
	 *      path="/votes",
	 *      summary="Store a newly created Vote in storage",
	 *      tags={"Vote"},
	 *      description="Store Vote",
	 *      produces={"application/json"},
	 *      security = {{"JWTBearer":{}}},
	 *      @SWG\Parameter(
	 *          name="body",
	 *          in="body",
	 *          description="Vote that should be stored",
	 *          required=false,
	 *          @SWG\Schema(ref="#/definitions/Vote")
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
	 *                  ref="#/definitions/Vote"
	 *              ),
	 *              @SWG\Property(
	 *                  property="message",
	 *                  type="string"
	 *              )
	 *          )
	 *      )
	 * )
	 */
	public function store(CreateVoteAPIRequest $request)
	{
		$input = $request->all();

		$votes = $this->voteRepository->create($input);

		return $this->sendResponse($votes->toArray(), 'Vote saved successfully');
	}

	/**
	 * @param int $id
	 *
	 * @return Response
	 *
	 * @SWG\Get(
	 *      path="/votes/{id}",
	 *      summary="Display the specified Vote",
	 *      tags={"Vote"},
	 *      description="Get Vote",
	 *      produces={"application/json"},
	 *      security = {{"JWTBearer":{}}},
	 *      @SWG\Parameter(
	 *          name="id",
	 *          description="id of Vote",
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
	 *                  ref="#/definitions/Vote"
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
		/** @var Vote $vote */
		$vote = $this->voteRepository->findWithoutFail($id);

		if (empty($vote)) {
			return $this->sendError('Vote not found');
		}

		return $this->sendResponse($vote->toArray(), 'Vote retrieved successfully');
	}

	/**
	 * @param int $id
	 * @param UpdateVoteAPIRequest $request
	 *
	 * @return Response
	 *
	 * @SWG\Put(
	 *      path="/votes/{id}",
	 *      summary="Update the specified Vote in storage",
	 *      tags={"Vote"},
	 *      description="Update Vote",
	 *      produces={"application/json"},
	 *      security = {{"JWTBearer":{}}},
	 *      @SWG\Parameter(
	 *          name="id",
	 *          description="id of Vote",
	 *          type="integer",
	 *          required=true,
	 *          in="path"
	 *      ),
	 *      @SWG\Parameter(
	 *          name="body",
	 *          in="body",
	 *          description="Vote that should be updated",
	 *          required=false,
	 *          @SWG\Schema(ref="#/definitions/Vote")
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
	 *                  ref="#/definitions/Vote"
	 *              ),
	 *              @SWG\Property(
	 *                  property="message",
	 *                  type="string"
	 *              )
	 *          )
	 *      )
	 * )
	 */
	public function update($id, UpdateVoteAPIRequest $request)
	{
		$input = $request->all();

		/** @var Vote $vote */
		$vote = $this->voteRepository->findWithoutFail($id);

		if (empty($vote)) {
			return $this->sendError('Vote not found');
		}

		$vote = $this->voteRepository->update($input, $id);

		return $this->sendResponse($vote->toArray(), 'Vote updated successfully');
	}

	/**
	 * @param int $id
	 *
	 * @return Response
	 *
	 * @SWG\Delete(
	 *      path="/votes/{id}",
	 *      summary="Remove the specified Vote from storage",
	 *      tags={"Vote"},
	 *      description="Delete Vote",
	 *      produces={"application/json"},
	 *      security = {{"JWTBearer":{}}},
	 *      @SWG\Parameter(
	 *          name="id",
	 *          description="id of Vote",
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
		/** @var Vote $vote */
		$vote = $this->voteRepository->findWithoutFail($id);

		if (empty($vote)) {
			return $this->sendError('Vote not found');
		}

		$vote->delete();

		return $this->sendResponse($id, 'Vote deleted successfully');
	}
}
