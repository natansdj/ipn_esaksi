<?php

namespace App\Http\Controllers\Api;

use App\Criteria\UserRegularCriteria;
use App\Http\Requests\Api\CreateUserAPIRequest;
use App\Http\Requests\Api\UpdateUserAPIRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use App\Criteria\AppRequestCriteria;
use Response;

/**
 * Class UserController
 * @package App\Http\Controllers\Api
 */
class UserAPIController extends AppBaseController
{
	/** @var  UserRepository */
	private $userRepository;

	public function __construct(UserRepository $userRepo)
	{
		$this->userRepository = $userRepo;
	}

	/**
	 * @param Request $request
	 *
	 * @return Response
	 *
	 * @SWG\Get(
	 *      path="/users",
	 *      summary="Get a listing of the Users.",
	 *      tags={"User"},
	 *      description="Get all Users",
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
	 *                  @SWG\Items(ref="#/definitions/User")
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
		$this->userRepository->pushCriteria(new UserRegularCriteria());
		$this->userRepository->pushCriteria(new AppRequestCriteria($request));
		$this->userRepository->pushCriteria(new LimitOffsetCriteria($request));
		$users = $this->userRepository->all();

		return $this->sendResponse($users->toArray(), 'Users retrieved successfully');
	}

	/**
	 * @param CreateUserAPIRequest $request
	 *
	 * @return Response
	 *
	 * @SWG\Post(
	 *      path="/users",
	 *      summary="Store a newly created User in storage",
	 *      tags={"User"},
	 *      description="Store User",
	 *      produces={"application/json"},
	 *      security = {{"JWTBearer":{}}},
	 *      @SWG\Parameter(
	 *          name="body",
	 *          in="body",
	 *          description="User that should be stored",
	 *          required=false,
	 *          @SWG\Schema(ref="#/definitions/User")
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
	 *                  ref="#/definitions/User"
	 *              ),
	 *              @SWG\Property(
	 *                  property="message",
	 *                  type="string"
	 *              )
	 *          )
	 *      )
	 * )
	 */
	public function store(CreateUserAPIRequest $request)
	{
		$input = $request->all();

		$users = $this->userRepository->create($input);

		return $this->sendResponse($users->toArray(), 'User saved successfully');
	}

	/**
	 * @param int $id
	 *
	 * @return Response
	 *
	 * @SWG\Get(
	 *      path="/users/{id}",
	 *      summary="Display the specified User",
	 *      tags={"User"},
	 *      description="Get User",
	 *      produces={"application/json"},
	 *      security = {{"JWTBearer":{}}},
	 *      @SWG\Parameter(
	 *          name="id",
	 *          description="id of User",
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
	 *                  ref="#/definitions/User"
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
		/** @var User $user */
		$user = $this->userRepository->findWithoutFail($id);

		if (empty($user)) {
			return $this->sendError('User not found');
		}

		return $this->sendResponse($user->toArray(), 'User retrieved successfully');
	}

	/**
	 * @param int $id
	 * @param UpdateUserAPIRequest $request
	 *
	 * @return Response
	 *
	 * @SWG\Put(
	 *      path="/users/{id}",
	 *      summary="Update the specified User in storage",
	 *      tags={"User"},
	 *      description="Update User",
	 *      produces={"application/json"},
	 *      security = {{"JWTBearer":{}}},
	 *      @SWG\Parameter(
	 *          name="id",
	 *          description="id of User",
	 *          type="integer",
	 *          required=true,
	 *          in="path"
	 *      ),
	 *      @SWG\Parameter(
	 *          name="body",
	 *          in="body",
	 *          description="User that should be updated",
	 *          required=false,
	 *          @SWG\Schema(ref="#/definitions/User")
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
	 *                  ref="#/definitions/User"
	 *              ),
	 *              @SWG\Property(
	 *                  property="message",
	 *                  type="string"
	 *              )
	 *          )
	 *      )
	 * )
	 */
	public function update($id, UpdateUserAPIRequest $request)
	{
		$input = $request->all();

		/** @var User $user */
		$user = $this->userRepository->findWithoutFail($id);

		if (empty($user)) {
			return $this->sendError('User not found');
		}

		$user = $this->userRepository->update($input, $id);

		return $this->sendResponse($user->toArray(), 'User updated successfully');
	}

	public function destroy($id)
	{
		return $this->sendError('Not found');
	}
}
