<?php

use Faker\Factory as Faker;
use App\Models\Pilpres;
use App\Repositories\PilpresRepository;

trait MakePilpresTrait
{
    /**
     * Create fake instance of Pilpres and save it in database
     *
     * @param array $pilpresFields
     * @return Pilpres
     */
    public function makePilpres($pilpresFields = [])
    {
        /** @var PilpresRepository $pilpresRepo */
        $pilpresRepo = App::make(PilpresRepository::class);
        $theme = $this->fakePilpresData($pilpresFields);
        return $pilpresRepo->create($theme);
    }

    /**
     * Get fake instance of Pilpres
     *
     * @param array $pilpresFields
     * @return Pilpres
     */
    public function fakePilpres($pilpresFields = [])
    {
        return new Pilpres($this->fakePilpresData($pilpresFields));
    }

    /**
     * Get fake data of Pilpres
     *
     * @param array $postFields
     * @return array
     */
    public function fakePilpresData($pilpresFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'capres_name' => $fake->word,
            'capres_dob' => $fake->word,
            'capres_pob' => $fake->word,
            'capres_partai' => $fake->word,
            'cawapres_name' => $fake->word,
            'cawapres_dob' => $fake->word,
            'cawapres_pob' => $fake->word,
            'cawapres_partai' => $fake->word,
            'type' => $fake->word,
            'note' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $pilpresFields);
    }
}
