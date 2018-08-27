<?php

namespace App\Http\Controllers\Api;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
	/**
	 * @SWG\SecurityScheme(
	 *      securityDefinition="JWTBearer",
	 *      type="apiKey",
	 *      name="Authorization",
	 *      description="Use JWT Authentication format: 'Bearer ...'",
	 *      in="header",
	 *  )
	 */
	/**
	 * Create a new AuthController instance.
	 *
	 */
	public function __construct()
	{
		$this->middleware('jwt.verify', ['except' => ['login', 'refresh']]);
	}

	/**
	 * Get a JWT via given credentials.
	 *
	 * @return \Illuminate\Http\JsonResponse
	 *
	 * @SWG\Post(
	 *      path="/auth/login",
	 *      summary="Login",
	 *      tags={"Auth"},
	 *      description="Auth Login",
	 *      produces={"application/json"},
	 *      @SWG\Parameter(
	 *          name="email",
	 *          in="formData",
	 *          type="string",
	 *          required=true,
	 *      ),
	 *      @SWG\Parameter(
	 *          name="password",
	 *          in="formData",
	 *          type="string",
	 *          required=true,
	 *      ),
	 *      @SWG\Response(
	 *          response=200,
	 *          description="successful operation",
	 *          @SWG\Schema(ref="#/definitions/respondWithToken")
	 *      )
	 * )
	 */
	public function login()
	{
		$credentials = request(['email', 'password']);

		try {
			if ( ! $token = JWTAuth::attempt($credentials)) {
				return response()->json(['error' => 'invalid_credentials'], 401);
			}
		} catch (JWTException $e) {
			return response()->json(['error' => 'could_not_create_token'], 500);
		}

		return $this->respondWithToken($token);
	}

	/**
	 * Get the token array structure.
	 *
	 * @param  string $token
	 *
	 * @return \Illuminate\Http\JsonResponse
	 *
	 * @SWG\Definition(
	 *      definition="respondWithToken",
	 * 		@SWG\Property(property="access_token", type="string", example="eyJ0eXAiOiJKV1QiLC...", description="UUID"),
	 * 		@SWG\Property(property="token_type", type="string", example="bearer", description="bearer"),
	 * 		@SWG\Property(property="expires_in", type="integer", example="20160"),
	 *  ),
	 */
	protected function respondWithToken($token)
	{
		return response()->json([
			'access_token' => $token,
			'token_type'   => 'bearer',
			'expires_in'   => auth('api')->factory()->getTTL() * 60
		]);
	}

	/**
	 * Get the authenticated User.
	 *
	 * @return \Illuminate\Http\JsonResponse
	 * @SWG\Post(
	 *      path="/auth/me",
	 *      summary="Get current user data",
	 *      tags={"Auth"},
	 *      description="Get current user",
	 *      produces={"application/json"},
	 *      security = {{"JWTBearer":{}}},
	 *      @SWG\Response(
	 *          response=200,
	 *          description="successful operation",
	 *          @SWG\Schema(ref="#/definitions/User")
	 *      )
	 * )
	 */
	public function me()
	{
		return response()->json(auth('api')->user());
	}

	/**
	 * Log the user out (Invalidate the token).
	 *
	 * @return \Illuminate\Http\JsonResponse
	 *
	 * @SWG\Post(
	 *      path="/auth/logout",
	 *      summary="Logout",
	 *      tags={"Auth"},
	 *      description="Auth Logout",
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
	 *                  example="Successfully logged out"
	 *              ),
	 *          )
	 *      )
	 * )
	 */
	public function logout()
	{
		auth('api')->logout();

		return response()->json(['message' => 'Successfully logged out']);
	}

	/**
	 * Refresh a token.
	 *
	 * @return \Illuminate\Http\JsonResponse
	 *
	 * @SWG\Post(
	 *      path="/auth/refresh",
	 *      summary="Refresh JWT token",
	 *      tags={"Auth"},
	 *      description="Auth refresh token",
	 *      produces={"application/json"},
	 *      security = {{"JWTBearer":{}}},
	 *      @SWG\Response(
	 *          response=200,
	 *          description="successful operation",
	 *          @SWG\Schema(ref="#/definitions/respondWithToken")
	 *      )
	 * )
	 */
	public function refresh()
	{
		return $this->respondWithToken(auth('api')->refresh());
	}
}