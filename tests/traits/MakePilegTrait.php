<?php

use Faker\Factory as Faker;
use App\Models\Pileg;
use App\Repositories\PilegRepository;

trait MakePilegTrait
{
    /**
     * Create fake instance of Pileg and save it in database
     *
     * @param array $pilegFields
     * @return Pileg
     */
    public function makePileg($pilegFields = [])
    {
        /** @var PilegRepository $pilegRepo */
        $pilegRepo = App::make(PilegRepository::class);
        $theme = $this->fakePilegData($pilegFields);
        return $pilegRepo->create($theme);
    }

    /**
     * Get fake instance of Pileg
     *
     * @param array $pilegFields
     * @return Pileg
     */
    public function fakePileg($pilegFields = [])
    {
        return new Pileg($this->fakePilegData($pilegFields));
    }

    /**
     * Get fake data of Pileg
     *
     * @param array $postFields
     * @return array
     */
    public function fakePilegData($pilegFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'dapil_id' => $fake->randomDigitNotNull,
            'name' => $fake->word,
            'name2' => $fake->word,
            'dob' => $fake->word,
            'pob' => $fake->word,
            'partai' => $fake->word,
            'type' => $fake->word
        ], $pilegFields);
    }
}
