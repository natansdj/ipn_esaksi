<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VoteApiTest extends TestCase
{
    use MakeVoteTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateVote()
    {
        $vote = $this->fakeVoteData();
        $this->json('POST', '/api/v1/votes', $vote);

        $this->assertApiResponse($vote);
    }

    /**
     * @test
     */
    public function testReadVote()
    {
        $vote = $this->makeVote();
        $this->json('GET', '/api/v1/votes/'.$vote->id);

        $this->assertApiResponse($vote->toArray());
    }

    /**
     * @test
     */
    public function testUpdateVote()
    {
        $vote = $this->makeVote();
        $editedVote = $this->fakeVoteData();

        $this->json('PUT', '/api/v1/votes/'.$vote->id, $editedVote);

        $this->assertApiResponse($editedVote);
    }

    /**
     * @test
     */
    public function testDeleteVote()
    {
        $vote = $this->makeVote();
        $this->json('DELETE', '/api/v1/votes/'.$vote->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/votes/'.$vote->id);

        $this->assertResponseStatus(404);
    }
}
