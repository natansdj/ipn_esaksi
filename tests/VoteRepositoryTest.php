<?php

use App\Models\Vote;
use App\Repositories\VoteRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VoteRepositoryTest extends TestCase
{
    use MakeVoteTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var VoteRepository
     */
    protected $voteRepo;

    public function setUp()
    {
        parent::setUp();
        $this->voteRepo = App::make(VoteRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateVote()
    {
        $vote = $this->fakeVoteData();
        $createdVote = $this->voteRepo->create($vote);
        $createdVote = $createdVote->toArray();
        $this->assertArrayHasKey('id', $createdVote);
        $this->assertNotNull($createdVote['id'], 'Created Vote must have id specified');
        $this->assertNotNull(Vote::find($createdVote['id']), 'Vote with given id must be in DB');
        $this->assertModelData($vote, $createdVote);
    }

    /**
     * @test read
     */
    public function testReadVote()
    {
        $vote = $this->makeVote();
        $dbVote = $this->voteRepo->find($vote->id);
        $dbVote = $dbVote->toArray();
        $this->assertModelData($vote->toArray(), $dbVote);
    }

    /**
     * @test update
     */
    public function testUpdateVote()
    {
        $vote = $this->makeVote();
        $fakeVote = $this->fakeVoteData();
        $updatedVote = $this->voteRepo->update($fakeVote, $vote->id);
        $this->assertModelData($fakeVote, $updatedVote->toArray());
        $dbVote = $this->voteRepo->find($vote->id);
        $this->assertModelData($fakeVote, $dbVote->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteVote()
    {
        $vote = $this->makeVote();
        $resp = $this->voteRepo->delete($vote->id);
        $this->assertTrue($resp);
        $this->assertNull(Vote::find($vote->id), 'Vote should not exist in DB');
    }
}
