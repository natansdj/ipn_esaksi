<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TpsApiTest extends TestCase
{
	use MakeTpsTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

	/**
	 * @test
	 */
	public function testCreateTps()
	{
		$tps = $this->fakeTpsData();
		$this->json('POST', '/api/v1/tps', $tps);

		$this->assertApiResponse($tps);
	}

	/**
	 * @test
	 */
	public function testReadTps()
	{
		$tps = $this->makeTps();
		$this->json('GET', '/api/v1/tps/' . $tps->id);

		$this->assertApiResponse($tps->toArray());
	}

	/**
	 * @test
	 */
	public function testUpdateTps()
	{
		$tps       = $this->makeTps();
		$editedTps = $this->fakeTpsData();

		$this->json('PUT', '/api/v1/tps/' . $tps->id, $editedTps);

		$this->assertApiResponse($editedTps);
	}

	/**
	 * @test
	 */
	public function testDeleteTps()
	{
		$tps = $this->makeTps();
		$this->json('DELETE', '/api/v1/tps/' . $tps->id);

		$this->assertApiSuccess();
		$this->json('GET', '/api/v1/tps/' . $tps->id);

		$this->assertResponseStatus(404);
	}
}
