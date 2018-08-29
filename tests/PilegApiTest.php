<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PilegApiTest extends TestCase
{
    use MakePilegTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatePileg()
    {
        $pileg = $this->fakePilegData();
        $this->json('POST', '/api/pilegs', $pileg);

        $this->assertApiResponse($pileg);
    }

    /**
     * @test
     */
    public function testReadPileg()
    {
        $pileg = $this->makePileg();
        $this->json('GET', '/api/pilegs/'.$pileg->id);

        $this->assertApiResponse($pileg->toArray());
    }

    /**
     * @test
     */
    public function testUpdatePileg()
    {
        $pileg = $this->makePileg();
        $editedPileg = $this->fakePilegData();

        $this->json('PUT', '/api/pilegs/'.$pileg->id, $editedPileg);

        $this->assertApiResponse($editedPileg);
    }

    /**
     * @test
     */
    public function testDeletePileg()
    {
        $pileg = $this->makePileg();
        $this->json('DELETE', '/api/pilegs/'.$pileg->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/pilegs/'.$pileg->id);

        $this->assertResponseStatus(404);
    }
}
