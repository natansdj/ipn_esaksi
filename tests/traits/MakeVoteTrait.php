<?php

use Faker\Factory as Faker;
use App\Models\Vote;
use App\Repositories\VoteRepository;

trait MakeVoteTrait
{
    /**
     * Create fake instance of Vote and save it in database
     *
     * @param array $voteFields
     * @return Vote
     */
    public function makeVote($voteFields = [])
    {
        /** @var VoteRepository $voteRepo */
        $voteRepo = App::make(VoteRepository::class);
        $theme = $this->fakeVoteData($voteFields);
        return $voteRepo->create($theme);
    }

    /**
     * Get fake instance of Vote
     *
     * @param array $voteFields
     * @return Vote
     */
    public function fakeVote($voteFields = [])
    {
        return new Vote($this->fakeVoteData($voteFields));
    }

    /**
     * Get fake data of Vote
     *
     * @param array $postFields
     * @return array
     */
    public function fakeVoteData($voteFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'tps_id' => $fake->randomDigitNotNull,
            'user_id' => $fake->randomDigitNotNull,
            'vote_date' => $fake->word,
            'note' => $fake->word,
            'count' => $fake->randomDigitNotNull,
            'voteable_id' => $fake->randomDigitNotNull,
            'voteable_type' => $fake->word,
            'type' => $fake->word,
            'deleted_at' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $voteFields);
    }
}
