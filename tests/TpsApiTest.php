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
        $this->json('POST', '/api/tps', $tps);

        $this->assertApiResponse($tps);
    }

    /**
     * @test
     */
    public function testReadTps()
    {
        $tps = $this->makeTps();
        $this->json('GET', '/api/tps/'.$tps->id);

        $this->assertApiResponse($tps->toArray());
    }

    /**
     * @test
     */
    public function testUpdateTps()
    {
        $tps = $this->makeTps();
        $editedTps = $this->fakeTpsData();

        $this->json('PUT', '/api/tps/'.$tps->id, $editedTps);

        $this->assertApiResponse($editedTps);
    }

    /**
     * @test
     */
    public function testDeleteTps()
    {
        $tps = $this->makeTps();
        $this->json('DELETE', '/api/tps/'.$tps->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/tps/'.$tps->id);

        $this->assertResponseStatus(404);
    }
}
