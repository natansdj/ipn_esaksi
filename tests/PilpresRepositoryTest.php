<?php

use App\Models\Pilpres;
use App\Repositories\PilpresRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PilpresRepositoryTest extends TestCase
{
    use MakePilpresTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var PilpresRepository
     */
    protected $pilpresRepo;

    public function setUp()
    {
        parent::setUp();
        $this->pilpresRepo = App::make(PilpresRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatePilpres()
    {
        $pilpres = $this->fakePilpresData();
        $createdPilpres = $this->pilpresRepo->create($pilpres);
        $createdPilpres = $createdPilpres->toArray();
        $this->assertArrayHasKey('id', $createdPilpres);
        $this->assertNotNull($createdPilpres['id'], 'Created Pilpres must have id specified');
        $this->assertNotNull(Pilpres::find($createdPilpres['id']), 'Pilpres with given id must be in DB');
        $this->assertModelData($pilpres, $createdPilpres);
    }

    /**
     * @test read
     */
    public function testReadPilpres()
    {
        $pilpres = $this->makePilpres();
        $dbPilpres = $this->pilpresRepo->find($pilpres->id);
        $dbPilpres = $dbPilpres->toArray();
        $this->assertModelData($pilpres->toArray(), $dbPilpres);
    }

    /**
     * @test update
     */
    public function testUpdatePilpres()
    {
        $pilpres = $this->makePilpres();
        $fakePilpres = $this->fakePilpresData();
        $updatedPilpres = $this->pilpresRepo->update($fakePilpres, $pilpres->id);
        $this->assertModelData($fakePilpres, $updatedPilpres->toArray());
        $dbPilpres = $this->pilpresRepo->find($pilpres->id);
        $this->assertModelData($fakePilpres, $dbPilpres->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletePilpres()
    {
        $pilpres = $this->makePilpres();
        $resp = $this->pilpresRepo->delete($pilpres->id);
        $this->assertTrue($resp);
        $this->assertNull(Pilpres::find($pilpres->id), 'Pilpres should not exist in DB');
    }
}
