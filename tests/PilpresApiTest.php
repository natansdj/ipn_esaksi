<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PilpresApiTest extends TestCase
{
    use MakePilpresTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatePilpres()
    {
        $pilpres = $this->fakePilpresData();
        $this->json('POST', '/api/pilpres', $pilpres);

        $this->assertApiResponse($pilpres);
    }

    /**
     * @test
     */
    public function testReadPilpres()
    {
        $pilpres = $this->makePilpres();
        $this->json('GET', '/api/pilpres/'.$pilpres->id);

        $this->assertApiResponse($pilpres->toArray());
    }

    /**
     * @test
     */
    public function testUpdatePilpres()
    {
        $pilpres = $this->makePilpres();
        $editedPilpres = $this->fakePilpresData();

        $this->json('PUT', '/api/pilpres/'.$pilpres->id, $editedPilpres);

        $this->assertApiResponse($editedPilpres);
    }

    /**
     * @test
     */
    public function testDeletePilpres()
    {
        $pilpres = $this->makePilpres();
        $this->json('DELETE', '/api/pilpres/'.$pilpres->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/pilpres/'.$pilpres->id);

        $this->assertResponseStatus(404);
    }
}
