<?php

use App\Models\Pileg;
use App\Repositories\PilegRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PilegRepositoryTest extends TestCase
{
    use MakePilegTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var PilegRepository
     */
    protected $pilegRepo;

    public function setUp()
    {
        parent::setUp();
        $this->pilegRepo = App::make(PilegRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatePileg()
    {
        $pileg = $this->fakePilegData();
        $createdPileg = $this->pilegRepo->create($pileg);
        $createdPileg = $createdPileg->toArray();
        $this->assertArrayHasKey('id', $createdPileg);
        $this->assertNotNull($createdPileg['id'], 'Created Pileg must have id specified');
        $this->assertNotNull(Pileg::find($createdPileg['id']), 'Pileg with given id must be in DB');
        $this->assertModelData($pileg, $createdPileg);
    }

    /**
     * @test read
     */
    public function testReadPileg()
    {
        $pileg = $this->makePileg();
        $dbPileg = $this->pilegRepo->find($pileg->id);
        $dbPileg = $dbPileg->toArray();
        $this->assertModelData($pileg->toArray(), $dbPileg);
    }

    /**
     * @test update
     */
    public function testUpdatePileg()
    {
        $pileg = $this->makePileg();
        $fakePileg = $this->fakePilegData();
        $updatedPileg = $this->pilegRepo->update($fakePileg, $pileg->id);
        $this->assertModelData($fakePileg, $updatedPileg->toArray());
        $dbPileg = $this->pilegRepo->find($pileg->id);
        $this->assertModelData($fakePileg, $dbPileg->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletePileg()
    {
        $pileg = $this->makePileg();
        $resp = $this->pilegRepo->delete($pileg->id);
        $this->assertTrue($resp);
        $this->assertNull(Pileg::find($pileg->id), 'Pileg should not exist in DB');
    }
}
