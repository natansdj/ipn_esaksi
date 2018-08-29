<?php

use App\Models\Tps;
use App\Repositories\TpsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TpsRepositoryTest extends TestCase
{
	use MakeTpsTrait, ApiTestTrait, DatabaseTransactions;

	/**
	 * @var TpsRepository
	 */
	protected $tpsRepo;

	public function setUp()
	{
		parent::setUp();
		$this->tpsRepo = App::make(TpsRepository::class);
	}

	/**
	 * @test create
	 */
	public function testCreateTps()
	{
		$tps        = $this->fakeTpsData();
		$createdTps = $this->tpsRepo->create($tps);
		$createdTps = $createdTps->toArray();
		$this->assertArrayHasKey('id', $createdTps);
		$this->assertNotNull($createdTps['id'], 'Created Tps must have id specified');
		$this->assertNotNull(Tps::find($createdTps['id']), 'Tps with given id must be in DB');
		$this->assertModelData($tps, $createdTps);
	}

	/**
	 * @test read
	 */
	public function testReadTps()
	{
		$tps   = $this->makeTps();
		$dbTps = $this->tpsRepo->find($tps->id);
		$dbTps = $dbTps->toArray();
		$this->assertModelData($tps->toArray(), $dbTps);
	}

	/**
	 * @test update
	 */
	public function testUpdateTps()
	{
		$tps        = $this->makeTps();
		$fakeTps    = $this->fakeTpsData();
		$updatedTps = $this->tpsRepo->update($fakeTps, $tps->id);
		$this->assertModelData($fakeTps, $updatedTps->toArray());
		$dbTps = $this->tpsRepo->find($tps->id);
		$this->assertModelData($fakeTps, $dbTps->toArray());
	}

	/**
	 * @test delete
	 */
	public function testDeleteTps()
	{
		$tps  = $this->makeTps();
		$resp = $this->tpsRepo->delete($tps->id);
		$this->assertTrue($resp);
		$this->assertNull(Tps::find($tps->id), 'Tps should not exist in DB');
	}
}
